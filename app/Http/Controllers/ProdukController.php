<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\DetailProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('q');
        $kategoriId = $request->query('kategori', 'all');

        $query = Produk::with('kategori')->latest();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_produk', 'like', "%{$search}%")
                  ->orWhere('kode_produk', 'like', "%{$search}%");
            });
        }

        if ($kategoriId !== 'all') {
            $query->where('kategori_id', $kategoriId);
        }

        $produks = $query->paginate(10)->withQueryString();
        $kategoriOptions = Kategori::all();

        return view('admin.product.index', compact('produks', 'search', 'kategoriId', 'kategoriOptions'));
    }

    public function create()
    {
        $kategoriOptions = Kategori::all();
        return view('admin.product.create', compact('kategoriOptions'));
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

        DetailProduk::create([
            'produk_id' => $produk->id,
            'deskripsi_lengkap_produk' => $validated['deskripsi_lengkap_produk'],
            'tipe' => $validated['tipe'],
            'voltase' => $validated['voltase'],
            'kapasitas' => $validated['kapasitas'],
            'siklus_hidup' => $validated['siklus_hidup'],
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Produk $produk)
    {
        $produk->load('detailProduk');
        $kategoriOptions = Kategori::all();
        return view('admin.product.edit', compact('produk', 'kategoriOptions'));
    }

    public function update(Request $request, Produk $produk)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kode_produk' => 'required|string|max:255|unique:produks,kode_produk,' . $produk->id,
            'kategori_id' => 'required|exists:kategoris,id',
            'deskripsi' => 'nullable|string',
            'img' => 'nullable|image|max:2048',
            'deskripsi_lengkap_produk' => 'required|string',
            'tipe' => 'required|string|max:255',
            'voltase' => 'required|string|max:255',
            'kapasitas' => 'required|string|max:255',
            'siklus_hidup' => 'required|string|max:255',
        ]);

        $updateData = [
            'nama_produk' => $validated['nama_produk'],
            'kode_produk' => $validated['kode_produk'],
            'kategori_id' => $validated['kategori_id'],
            'deskripsi' => $validated['deskripsi'] ?? null,
        ];

        if ($request->hasFile('img')) {
            if ($produk->img && file_exists(public_path($produk->img))) {
                @unlink(public_path($produk->img));
            }
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/products'), $filename);
            $updateData['img'] = 'images/products/' . $filename;
        }

        $produk->update($updateData);

        if ($produk->detailProduk) {
            $produk->detailProduk->update([
                'deskripsi_lengkap_produk' => $validated['deskripsi_lengkap_produk'],
                'tipe' => $validated['tipe'],
                'voltase' => $validated['voltase'],
                'kapasitas' => $validated['kapasitas'],
                'siklus_hidup' => $validated['siklus_hidup'],
            ]);
        } else {
            DetailProduk::create([
                'produk_id' => $produk->id,
                'deskripsi_lengkap_produk' => $validated['deskripsi_lengkap_produk'],
                'tipe' => $validated['tipe'],
                'voltase' => $validated['voltase'],
                'kapasitas' => $validated['kapasitas'],
                'siklus_hidup' => $validated['siklus_hidup'],
            ]);
        }

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Produk $produk)
    {
        if ($produk->img && file_exists(public_path($produk->img))) {
            @unlink(public_path($produk->img));
        }
        $produk->detailProduk()->delete();
        $produk->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
