<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        return response()->json(Artikel::latest()->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_artikel' => 'required|string',
            'judul' => 'required|string|max:255',
            'slug' => 'nullable|string',
            'label' => 'nullable|string',
            'tag' => 'nullable|string',
            'deskripsi' => 'required|string',
            'gambar_utama' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar_utama')) {
            $file = $request->file('gambar_utama');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/artikel'), $filename);
            $validated['gambar_utama'] = 'images/artikel/' . $filename;
        }

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['judul']);
        }

        $artikel = Artikel::create($validated);
        return response()->json($artikel, 201);
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return response()->json($artikel);
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        
        $validated = $request->validate([
            'kategori_artikel' => 'sometimes|required|string',
            'judul' => 'sometimes|required|string|max:255',
            'slug' => 'nullable|string',
            'label' => 'nullable|string',
            'tag' => 'nullable|string',
            'deskripsi' => 'sometimes|required|string',
            'gambar_utama' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar_utama')) {
            if ($artikel->gambar_utama && file_exists(public_path($artikel->gambar_utama))) {
                @unlink(public_path($artikel->gambar_utama));
            }
            $file = $request->file('gambar_utama');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/artikel'), $filename);
            $validated['gambar_utama'] = 'images/artikel/' . $filename;
        }

        if (isset($validated['judul']) && empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['judul']);
        }

        $artikel->update($validated);
        return response()->json($artikel);
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        if ($artikel->gambar_utama && file_exists(public_path($artikel->gambar_utama))) {
            @unlink(public_path($artikel->gambar_utama));
        }
        $artikel->delete();
        return response()->json(null, 204);
    }
}
