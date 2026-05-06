<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class BeritaController extends Controller
{
    public function index()
    {
        $articles = Artikel::latest()->get();
        return view('pages.berita', compact('articles'));
    }
    public function show($slug)
    {
        $article = Artikel::where('slug', $slug)->firstOrFail();
        
        $relatedArticles = Artikel::where('kategori_artikel', $article->kategori_artikel)
            ->where('id', '!=', $article->id)
            ->take(3)
            ->get();

        if ($relatedArticles->count() < 3) {
            $additional = Artikel::where('id', '!=', $article->id)
                ->whereNotIn('id', $relatedArticles->pluck('id'))
                ->take(3 - $relatedArticles->count())
                ->get();
            $relatedArticles = $relatedArticles->merge($additional);
        }

        return view('pages.detail-berita', compact('article', 'relatedArticles'));
    }
}
