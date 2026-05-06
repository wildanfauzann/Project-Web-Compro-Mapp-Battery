<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function index(Request $request)
    {
        $query = Layanan::query();
        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }
        $layanans = $query->latest()->paginate(10);
        return view('admin.service.index', compact('layanans'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'description' => 'nullable|string',
            'detail_intro' => 'nullable|string',
            'detail_points' => 'nullable|string',
            'side_image' => 'nullable|image|max:2048',
            'gallery.*' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_img_' . $file->getClientOriginalName();
            $file->move(public_path('images/layanan'), $filename);
            $validated['image'] = 'images/layanan/' . $filename;
        }

        if ($request->hasFile('side_image')) {
            $file = $request->file('side_image');
            $filename = time() . '_side_' . $file->getClientOriginalName();
            $file->move(public_path('images/layanan'), $filename);
            $validated['side_image'] = 'images/layanan/' . $filename;
        }

        if ($request->hasFile('gallery')) {
            $galleryPaths = [];
            foreach ($request->file('gallery') as $file) {
                $filename = time() . '_gal_' . $file->getClientOriginalName();
                $file->move(public_path('images/layanan'), $filename);
                $galleryPaths[] = 'images/layanan/' . $filename;
            }
            $validated['gallery'] = $galleryPaths;
        } else {
            $validated['gallery'] = [];
        }

        $validated['slug'] = Str::slug($validated['title']);
        
        if (!empty($validated['detail_points'])) {
            $points = explode("\n", str_replace("\r", "", $validated['detail_points']));
            $validated['detail_points'] = array_filter(array_map('trim', $points));
        } else {
            $validated['detail_points'] = [];
        }

        $validated['recommendations'] = [];

        Layanan::create($validated);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function show(Layanan $layanan) { }

    public function edit(Layanan $layanan)
    {
        return view('admin.service.edit', compact('layanan'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'detail_intro' => 'nullable|string',
            'detail_points' => 'nullable|string',
            'side_image' => 'nullable|image|max:2048',
            'gallery.*' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($layanan->image && file_exists(public_path($layanan->image))) @unlink(public_path($layanan->image));
            $file = $request->file('image');
            $filename = time() . '_img_' . $file->getClientOriginalName();
            $file->move(public_path('images/layanan'), $filename);
            $validated['image'] = 'images/layanan/' . $filename;
        }

        if ($request->hasFile('side_image')) {
            if ($layanan->side_image && file_exists(public_path($layanan->side_image))) @unlink(public_path($layanan->side_image));
            $file = $request->file('side_image');
            $filename = time() . '_side_' . $file->getClientOriginalName();
            $file->move(public_path('images/layanan'), $filename);
            $validated['side_image'] = 'images/layanan/' . $filename;
        }

        if ($request->hasFile('gallery')) {
            if (is_array($layanan->gallery)) {
                foreach ($layanan->gallery as $oldImg) {
                    if ($oldImg && file_exists(public_path($oldImg))) @unlink(public_path($oldImg));
                }
            }
            $galleryPaths = [];
            foreach ($request->file('gallery') as $file) {
                $filename = time() . '_gal_' . $file->getClientOriginalName();
                $file->move(public_path('images/layanan'), $filename);
                $galleryPaths[] = 'images/layanan/' . $filename;
            }
            $validated['gallery'] = $galleryPaths;
        }

        $validated['slug'] = Str::slug($validated['title']);

        if (isset($validated['detail_points'])) {
            $points = explode("\n", str_replace("\r", "", $validated['detail_points']));
            $validated['detail_points'] = array_filter(array_map('trim', $points));
        } else {
            $validated['detail_points'] = [];
        }

        $layanan->update($validated);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy(Layanan $layanan)
    {
        if ($layanan->image && file_exists(public_path($layanan->image))) @unlink(public_path($layanan->image));
        if ($layanan->side_image && file_exists(public_path($layanan->side_image))) @unlink(public_path($layanan->side_image));
        if (is_array($layanan->gallery)) {
            foreach ($layanan->gallery as $oldImg) {
                if ($oldImg && file_exists(public_path($oldImg))) @unlink(public_path($oldImg));
            }
        }
        $layanan->delete();
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
