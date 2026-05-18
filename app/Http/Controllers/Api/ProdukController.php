<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetailProduk;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return response()->json(Produk::with(['kategori', 'detailProduk'])->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kode_produk' => 'required|string|max:255|unique:produks',
            'kategori_id' => 'required|exists:kategoris,id',
            'deskripsi' => 'nullable|string',
            'img' => 'nullable|image|max:2048',
            'deskripsi_lengkap_produk' => 'required|string',
            'tipe' => 'required|string|max:255',
            'voltase' => 'required|string|max:255',
            'kapasitas' => 'required|string|max:255',
            'siklus_hidup' => 'required|string|max:255',
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/products'), $filename);
            $validated['img'] = 'images/products/' . $filename;
        }

        $produk = Produk::create([
            'nama_produk' => $validated['nama_produk'],
            'kode_produk' => $validated['kode_produk'],
            'kategori_id' => $validated['kategori_id'],
            'deskripsi' => $validated['deskripsi'] ?? null,
            'img' => $validated['img'] ?? null,
        ]);

        $kategori = Kategori::find($validated['kategori_id']);

        DetailProduk::create([
            'produk_id' => $produk->id,
            'kode_produk' => $validated['kode_produk'],
            'nama_kategori' => $kategori ? $kategori->nama_kategori : null,
            'deskripsi_lengkap_produk' => $validated['deskripsi_lengkap_produk'],
            'tipe' => $validated['tipe'],
            'voltase' => $validated['voltase'],
            'kapasitas' => $validated['kapasitas'],
            'siklus_hidup' => $validated['siklus_hidup'],
        ]);

        return response()->json($produk->load(['kategori', 'detailProduk']), 201);
    }

    public function show(Produk $produk)
    {
        return response()->json($produk->load(['kategori', 'detailProduk']));
    }

    public function update(Request $request, Produk $produk)
    {
        $validated = $request->validate([
            'nama_produk' => 'sometimes|required|string|max:255',
            'kode_produk' => 'sometimes|required|string|max:255|unique:produks,kode_produk,' . $produk->id,
            'kategori_id' => 'sometimes|required|exists:kategoris,id',
            'deskripsi' => 'nullable|string',
            'img' => 'nullable|image|max:2048',
            'deskripsi_lengkap_produk' => 'sometimes|required|string',
            'tipe' => 'sometimes|required|string|max:255',
            'voltase' => 'sometimes|required|string|max:255',
            'kapasitas' => 'sometimes|required|string|max:255',
            'siklus_hidup' => 'sometimes|required|string|max:255',
        ]);

        if ($request->hasFile('img')) {
            if ($produk->img && file_exists(public_path($produk->img))) {
                @unlink(public_path($produk->img));
            }
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/products'), $filename);
            $validated['img'] = 'images/products/' . $filename;
        }

        $produk->update($validated);

        $detailData = [
            'kode_produk' => $validated['kode_produk'] ?? $produk->kode_produk,
            'nama_kategori' => $produk->kategori?->nama_kategori,
        ];

        if (isset($validated['deskripsi_lengkap_produk'])) {
            $detailData['deskripsi_lengkap_produk'] = $validated['deskripsi_lengkap_produk'];
        }
        if (isset($validated['tipe'])) {
            $detailData['tipe'] = $validated['tipe'];
        }
        if (isset($validated['voltase'])) {
            $detailData['voltase'] = $validated['voltase'];
        }
        if (isset($validated['kapasitas'])) {
            $detailData['kapasitas'] = $validated['kapasitas'];
        }
        if (isset($validated['siklus_hidup'])) {
            $detailData['siklus_hidup'] = $validated['siklus_hidup'];
        }

        if ($produk->detailProduk) {
            $produk->detailProduk->update($detailData);
        } elseif (! empty($detailData['deskripsi_lengkap_produk'])) {
            $detailData['produk_id'] = $produk->id;
            DetailProduk::create($detailData);
        }

        return response()->json($produk->load(['kategori', 'detailProduk']));
    }

    public function destroy(Produk $produk)
    {
        try {
            if ($produk->img && file_exists(public_path($produk->img))) {
                @unlink(public_path($produk->img));
            }
            $produk->detailProduk()->delete();
            $produk->delete();
            return response()->json(['message' => 'Produk berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus produk: ' . $e->getMessage()], 500);
        }
    }
}
