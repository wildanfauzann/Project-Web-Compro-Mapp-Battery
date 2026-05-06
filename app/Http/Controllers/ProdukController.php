<?php

namespace App\Http\Controllers;

use App\Models\DetailProduk;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = trim((string) request('q', ''));
        $kategoriId = request('kategori', 'all');

        $kategoriOptions = Kategori::query()
            ->orderBy('nama_kategori')
            ->get();

        $produks = Produk::query()
            ->with(['kategori', 'detailProduk'])
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($nestedQuery) use ($search) {
                    $nestedQuery
                        ->where('nama_produk', 'like', '%' . $search . '%')
                        ->orWhere('kode_produk', 'like', '%' . $search . '%');
                });
            })
            ->when($kategoriId !== 'all', function ($query) use ($kategoriId) {
                $query->where('kategori_id', $kategoriId);
            })
            ->latest()
            ->paginate(8)
            ->withQueryString();

        return view('admin.product.index', compact('produks', 'kategoriOptions', 'search', 'kategoriId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriOptions = Kategori::query()
            ->orderBy('nama_kategori')
            ->get();

        return view('admin.product.create', compact('kategoriOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validateProduct($request);

        $imagePath = $this->storeImage($request);

        $produk = Produk::create([
            'kategori_id' => $validated['kategori_id'],
            'kode_produk' => $validated['kode_produk'],
            'nama_produk' => $validated['nama_produk'],
            'img' => $imagePath,
            'deskripsi' => $validated['deskripsi'] ?? null,
        ]);

        $this->syncDetailProduk($produk, $validated);

        return redirect()
            ->route('admin.produk.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $produk->load('detailProduk', 'kategori');

        $kategoriOptions = Kategori::query()
            ->orderBy('nama_kategori')
            ->get();

        return view('admin.product.edit', compact('produk', 'kategoriOptions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $validated = $this->validateProduct($request, $produk->id);

        $imagePath = $this->storeImage($request);

        if ($imagePath) {
            $this->deleteStoredImage($produk->img);
            $produk->img = $imagePath;
        }

        $produk->fill([
            'kategori_id' => $validated['kategori_id'],
            'kode_produk' => $validated['kode_produk'],
            'nama_produk' => $validated['nama_produk'],
            'deskripsi' => $validated['deskripsi'] ?? null,
        ]);

        $produk->save();

        $this->syncDetailProduk($produk, $validated);

        return redirect()
            ->route('admin.produk.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $this->deleteStoredImage($produk->img);
        $produk->detailProduk()->delete();
        $produk->delete();

        return back()->with('success', 'Produk berhasil dihapus.');
    }

    private function validateProduct(Request $request, ?int $produkId = null): array
    {
        return $request->validate([
            'kategori_id' => ['required', 'exists:kategoris,id'],
            'kode_produk' => [
                'required',
                'string',
                'max:255',
                Rule::unique('produks', 'kode_produk')->ignore($produkId),
            ],
            'nama_produk' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'img' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'deskripsi_lengkap_produk' => ['required', 'string'],
            'tipe' => ['nullable', 'string', 'max:255'],
            'voltase' => ['nullable', 'string', 'max:255'],
            'kapasitas' => ['nullable', 'string', 'max:255'],
            'siklus_hidup' => ['nullable', 'string', 'max:255'],
        ]);
    }

    private function syncDetailProduk(Produk $produk, array $validated): void
    {
        $kategori = Kategori::find($validated['kategori_id']);

        $produk->detailProduk()->updateOrCreate(
            ['produk_id' => $produk->id],
            [
                'nama_kategori' => $kategori?->nama_kategori,
                'kode_produk' => $validated['kode_produk'],
                'deskripsi_lengkap_produk' => $validated['deskripsi_lengkap_produk'],
                'tipe' => $validated['tipe'] ?? null,
                'voltase' => $validated['voltase'] ?? null,
                'kapasitas' => $validated['kapasitas'] ?? null,
                'siklus_hidup' => $validated['siklus_hidup'] ?? null,
            ]
        );
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('img')) {
            return null;
        }

        return $request->file('img')->store('produk', 'public');
    }

    private function deleteStoredImage(?string $imagePath): void
    {
        if (! $imagePath || ! str_starts_with($imagePath, 'produk/')) {
            return;
        }

        Storage::disk('public')->delete($imagePath);
    }
}
