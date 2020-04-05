<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(3);

        return view('index', compact('articles'));
    }
}
