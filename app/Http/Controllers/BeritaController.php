<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class BeritaController extends Controller
{
    public function index()
    {
        $editorialMoments = Artikel::where('kategori_artikel', 'editorial')->get();
        $visitStories = Artikel::where('kategori_artikel', 'visit')->get();
        $principalStories = Artikel::where('kategori_artikel', 'principal')->get();
        $exhibitionStories = Artikel::where('kategori_artikel', 'exhibition')->get();
        $installationStory = Artikel::where('kategori_artikel', 'installation')->first();
        $trainingStories = Artikel::where('kategori_artikel', 'training')->get();
        $unitTestingStory = Artikel::where('kategori_artikel', 'unit_testing')->first();

        return view('pages.berita', compact(
            'editorialMoments',
            'visitStories',
            'principalStories',
            'exhibitionStories',
            'installationStory',
            'trainingStories',
            'unitTestingStory'
        ));
    }
}
