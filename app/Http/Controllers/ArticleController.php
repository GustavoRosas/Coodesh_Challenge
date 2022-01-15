<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function challenge(){
        return 'Back-end Challenge 2021 🏅 - Space Flight News';
    }
    
    public function listArticles(){
        $obArticle = Article::all();

        return response()->json($obArticle);
    }
}
