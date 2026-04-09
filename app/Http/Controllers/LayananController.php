<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $services = Layanan::all();
        return view('pages.layanan', compact('services'));
    }
}
