<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use PDF;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('image', 'public');
        }
        Article::create([
            'title' => $request->title,
            'contents' => $request->contents,
            'featured_image' => $image_name
        ]);
        return 'Artikel berhasil disimpan';
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->contents = $request->contents;

        if ($article->featured_image && file_exists(storage_path('app/public/' . $article->featured_image))) {
            Storage::delete('public/' . $article->featured_image);
        }
        $image_name = $request->file('image')->store('image', 'public');
        $article->featured_image = $image_name;

        $article->save();
        return 'Artikel berhasil diubah';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    public function cetak_pdf()
    {
        $articles = Article::all();
        // $pdf = Pdf::loadView('articles.articles_pdf', ['articles' => $articles]);
        $pdf = Pdf::loadView('articles.articles_pdf', ['articles' => $articles]);
        $pdf->setPaper('A4', 'Portrait');
        return $pdf->stream('articles.pdf');
    }
}
