<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('articles.index',['articles'=>$articles]);
    }

    public function show($id) {
        $view_article = Article::find($id);
        return view('articles.show',['view_article'=>$view_article]);
    }
}
