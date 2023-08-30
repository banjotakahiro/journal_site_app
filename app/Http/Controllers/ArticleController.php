<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $view_article = Article::find($id);
        return view('articles.show', ['view_article' => $view_article]);
    }

    public function store(Request $request)
    {
        $articles = new Article;
        $articles->title = $request->title;
        $articles->body = $request->body;

        $articles->save();
        return redirect('/articles');
    }

    public function create()
    {
        return view('articles.create');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit',['article' => $article]);
    }

    public function update(Request $request,$id)
    {
        $articles = Article::find($id);
        $articles->title = $request->title;
        $articles->body = $request->body;

        $articles->save();
        return redirect('/articles');
    }

    public function destroy($id)
    {   
        $article = Article::find($id);
        $article ->delete();
        return redirect('/articles');
    }
}
