<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article', compact('article'));
    }

    public function create()
    {
        return view('editor');
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('editor', compact('article'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        return redirect('/article/' . $id);
    }
}
