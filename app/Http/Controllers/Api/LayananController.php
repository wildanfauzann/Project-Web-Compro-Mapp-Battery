<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function index()
    {
        return response()->json(Layanan::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'nullable|string|unique:layanans',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'detail_intro' => 'nullable|string',
            'detail_points' => 'nullable|array',
            'side_image' => 'nullable|image|max:2048',
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

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $layanan = Layanan::create($validated);
        return response()->json($layanan, 201);
    }

    public function show(Layanan $layanan)
    {
        return response()->json($layanan);
    }

    public function update(Request $request, Layanan $layanan)
    {

        $validated = $request->validate([
            'slug' => 'nullable|string|unique:layanans,slug,' . $layanan->id,
            'title' => 'sometimes|required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'detail_intro' => 'nullable|string',
            'detail_points' => 'nullable|array',
            'side_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($layanan->image && file_exists(public_path($layanan->image))) {
                @unlink(public_path($layanan->image));
            }
            $file = $request->file('image');
            $filename = time() . '_img_' . $file->getClientOriginalName();
            $file->move(public_path('images/layanan'), $filename);
            $validated['image'] = 'images/layanan/' . $filename;
        }

        if ($request->hasFile('side_image')) {
            if ($layanan->side_image && file_exists(public_path($layanan->side_image))) {
                @unlink(public_path($layanan->side_image));
            }
            $file = $request->file('side_image');
            $filename = time() . '_side_' . $file->getClientOriginalName();
            $file->move(public_path('images/layanan'), $filename);
            $validated['side_image'] = 'images/layanan/' . $filename;
        }

        if (isset($validated['title']) && empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $layanan->update($validated);
        return response()->json($layanan);
    }

    public function destroy(Layanan $layanan)
    {
        try {
            if ($layanan->image && file_exists(public_path($layanan->image))) {
                @unlink(public_path($layanan->image));
            }
            if ($layanan->side_image && file_exists(public_path($layanan->side_image))) {
                @unlink(public_path($layanan->side_image));
            }
            $layanan->delete();
            return response()->json(['message' => 'Layanan berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus layanan: ' . $e->getMessage()], 500);
        }
    }
}
