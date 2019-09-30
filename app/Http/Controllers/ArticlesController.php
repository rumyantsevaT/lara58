<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();

//      return 'get all articles';
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id); //найди или не ошибись дословно

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }
}
