<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('article_detail')->with('article', $article);
    }
}
