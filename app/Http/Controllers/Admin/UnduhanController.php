<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unduhan;
use Illuminate\Http\Request;

class UnduhanController extends Controller
{
    public function index()
    {
        return view('admin.download.index');
    }

    public function create() { }
    public function store(Request $request) { }
    public function show(Unduhan $unduhan) { }
    public function edit(Unduhan $unduhan) { }
    public function update(Request $request, Unduhan $unduhan) { }
    public function destroy(Unduhan $unduhan) { }
}
