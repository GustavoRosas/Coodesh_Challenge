<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function challenge(){
        return 'Back-end Challenge 2021 🏅 - Space Flight News';
    }

    public function listAllArticles(){
        $obArticle = Article::all();  
        return response()->json($obArticle);
    }

    public function listArticle( $id ){
        $obArticle = Article::all()->where('id', '=', $id);        
        return response()->json($obArticle);
    }

    public function addArticle( ArticleRequest $request ){
        $obArticle = new Article;
        $obArticle->featured = $request->featured;
        $obArticle->title = $request->title;
        $obArticle->url = $request->url;
        $obArticle->imageUrl = $request->imageUrl;
        $obArticle->newsSite = $request->newsSite;
        $obArticle->summary = $request->summary;
        $obArticle->publishedAt = $request->publishedAt;
        $obArticle->updatedAt = $request->updatedAt;
        $obArticle->launches = $request->launches;
        $obArticle->events = $request->events;
        $obArticle->save();

        return response()->json($obArticle);
    }

    public function updateArticle ( $id, Request $request ){
        $obArticle = Article::findOrFail($id);
        $obArticle->update($request->all());
        return response()->json($obArticle);
    }

    public function deleteArticle ($id, Request $request){
        $obArticle = Article::findOrFail($id);
        $obArticle->delete();
        return response()->json("Successfully excluded.");
    }
}
