<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Artikel::query();
        if ($request->filled('q')) {
            $query->where('judul', 'like', '%' . $request->q . '%');
        }
        $artikels = $query->latest()->paginate(10);
        return view('admin.news.index', compact('artikels'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori_artikel' => 'required|string|max:255',
            'label' => 'nullable|string|max:255',
            'tag' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'gambar_utama' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('gambar_utama')) {
            $file = $request->file('gambar_utama');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/artikel'), $filename);
            $validated['gambar_utama'] = 'images/artikel/' . $filename;
        }

        $validated['slug'] = Str::slug($validated['judul']);

        Artikel::create($validated);

        return redirect()->route('admin.berita.index')->with('success', 'Berita/Artikel berhasil ditambahkan.');
    }

    public function show(Artikel $beritum) { }

    public function edit(Artikel $beritum)
    {
        return view('admin.news.edit', ['artikel' => $beritum]);
    }

    public function update(Request $request, Artikel $beritum)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori_artikel' => 'required|string|max:255',
            'label' => 'nullable|string|max:255',
            'tag' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'gambar_utama' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar_utama')) {
            if ($beritum->gambar_utama && file_exists(public_path($beritum->gambar_utama))) {
                @unlink(public_path($beritum->gambar_utama));
            }
            $file = $request->file('gambar_utama');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/artikel'), $filename);
            $validated['gambar_utama'] = 'images/artikel/' . $filename;
        }

        $validated['slug'] = Str::slug($validated['judul']);

        $beritum->update($validated);

        return redirect()->route('admin.berita.index')->with('success', 'Berita/Artikel berhasil diperbarui.');
    }

    public function destroy(Artikel $beritum)
    {
        if ($beritum->gambar_utama && file_exists(public_path($beritum->gambar_utama))) {
            @unlink(public_path($beritum->gambar_utama));
        }
        $beritum->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita/Artikel berhasil dihapus.');
    }
}
