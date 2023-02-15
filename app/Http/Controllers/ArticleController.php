<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(){
        $articles = Article::all();
        return View('blog')->with('articles', $articles);
    }
}
