<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KontakSales;
use Illuminate\Http\Request;

class KontakSalesController extends Controller
{
    public function index()
    {
        return response()->json(KontakSales::latest()->get());
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

        $sales = KontakSales::create($validated);
        return response()->json($sales, 201);
    }

    public function show(KontakSales $kontakSale)
    {
        return response()->json($kontakSale);
    }

    public function update(Request $request, KontakSales $kontakSale)
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
            if ($kontakSale->foto && file_exists(public_path($kontakSale->foto))) @unlink(public_path($kontakSale->foto));
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/sales'), $filename);
            $validated['foto'] = 'images/sales/' . $filename;
        }

        $kontakSale->update($validated);
        return response()->json($kontakSale);
    }

    public function destroy(KontakSales $kontakSale)
    {
        try {
            if ($kontakSale->foto && file_exists(public_path($kontakSale->foto))) @unlink(public_path($kontakSale->foto));
            $kontakSale->delete();
            return response()->json(['message' => 'Kontak sales berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus kontak sales: ' . $e->getMessage()], 500);
        }
    }
}
