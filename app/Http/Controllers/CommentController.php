<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function store(Request $request, $article_id){
        $validatedData=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'content'=>'required|max:255',
        ]);

        $input = $request->all();
        $input['article_id'] = $article_id;
        $input['user_id'] = auth()->user()->id;

        $comment = Comment::create($input);


        $comment->save();
        return redirect()->route('blogdetails')->with('success','Comment Submitted Successfully!');
    }
}
