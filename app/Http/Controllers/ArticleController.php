<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {     
        $tags = Tag::all();
        
        return view('article.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            //'img' => $request->file('img')->store('img', 'public'),
        ]);

        if($request->file('img')){
            $article->img = $request->file('img')->store('img', 'public');
            $article->save();
        }

        $article->tags()->attach($request->tags);

        return redirect()->back()->with('message', 'Articolo creato con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        return view('article.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        // $article->update($request->all());

        if($request->file('img')) {
            Storage::delete($article->img);
            $img = $request->file('img')->store('public/img');
        }

        $article->update([
            $article->title = $request->title,
            $article->subtitle = $request->subtitle,
            $article->body = $request->body
        ]);
        if($request->img){
            $article->update([
                $article->img = $request->file('img')->store('img', 'public')
            ]);

        }

        $article->tags()->sync($request->tags);

        return redirect()->back()->with('message', 'Articolo aggiornato.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->tags()->detach();

        $article->delete();
        return view('welcome')->with('message', 'Articolo eliminato con successo.');
    }
}
