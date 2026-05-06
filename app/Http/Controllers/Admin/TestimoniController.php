<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        return view('admin.testimoni.index');
    }

    public function create() { }
    public function store(Request $request) { }
    public function show(Testimoni $testimoni) { }
    public function edit(Testimoni $testimoni) { }
    public function update(Request $request, Testimoni $testimoni) { }
    public function destroy(Testimoni $testimoni) { }
}
