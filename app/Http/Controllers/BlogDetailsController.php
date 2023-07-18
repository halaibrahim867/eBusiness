<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function readBlogDetails($article_id){
        $article=Article::find($article_id);
        $comments=$article->comments()->with('user')->get();
        $commentCount = $comments->count();
        $tags=Tag::all();
        //$articles=Article::all();
        //find($article_id);
        return view('blogdetails',compact('article','comments','commentCount','tags'));
    }
}
