<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $services = Layanan::all()->map(function ($service) {
            $service->image = $service->image ? asset($service->image) : null;
            $service->side_image = $service->side_image ? asset($service->side_image) : null;
            $service->gallery = array_map(function($img) {
                return asset($img);
            }, $service->gallery ?? []);
            return $service;
        });
        return view('pages.layanan', compact('services'));
    }
    public function show($slug)
    {
        $service = Layanan::where('slug', $slug)->firstOrFail();
        return view('pages.detail-layanan', compact('service'));
    }
}
