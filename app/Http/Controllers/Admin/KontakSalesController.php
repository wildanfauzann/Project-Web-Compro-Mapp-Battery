<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KontakSales;
use Illuminate\Http\Request;

class KontakSalesController extends Controller
{
    public function index(Request $request)
    {
        $query = KontakSales::query();
        if ($request->filled('q')) {
            $query->where('nama', 'like', '%' . $request->q . '%')
                  ->orWhere('area', 'like', '%' . $request->q . '%');
        }
        $kontakSales = $query->latest()->paginate(10);
        return view('admin.kontak-sales.index', compact('kontakSales'));
    }

    public function create()
    {
        return view('admin.kontak-sales.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'no_whatsapp' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/sales'), $filename);
            $validated['foto'] = 'images/sales/' . $filename;
        }

        KontakSales::create($validated);

        return redirect()->route('admin.kontak-sales.index')->with('success', 'Kontak Sales berhasil ditambahkan.');
    }

    public function show(KontakSales $kontak_sale) { }

    public function edit(KontakSales $kontak_sale)
    {
        return view('admin.kontak-sales.edit', compact('kontak_sale'));
    }

    public function update(Request $request, KontakSales $kontak_sale)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'no_whatsapp' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($kontak_sale->foto && file_exists(public_path($kontak_sale->foto))) @unlink(public_path($kontak_sale->foto));
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/sales'), $filename);
            $validated['foto'] = 'images/sales/' . $filename;
        }

        $kontak_sale->update($validated);

        return redirect()->route('admin.kontak-sales.index')->with('success', 'Kontak Sales berhasil diperbarui.');
    }

    public function destroy(KontakSales $kontak_sale)
    {
        if ($kontak_sale->foto && file_exists(public_path($kontak_sale->foto))) @unlink(public_path($kontak_sale->foto));
        $kontak_sale->delete();
        return redirect()->route('admin.kontak-sales.index')->with('success', 'Kontak Sales berhasil dihapus.');
    }
}
