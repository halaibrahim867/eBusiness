<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Portfolio;

use Carbon\Carbon;
use App\Models\PortfolioCategory;
use App\Models\Team;
use App\Traits\dataTrait;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
   // use dataTrait;
    /*
    public function createPortfolio(){
        return view('forms.portfolio');
    }

    public function storePortfolio(Request $request){
        //return $request;
        $file_name=$this ->saveImage($request -> photo, 'portfolio');
        //$path = $request->file('photo')->store('public/photos');

        Portfolio::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'portfolio_categories_id'=>$request->portfolio_categories_id,
            'photo'=> $file_name,
        ]);

    }*/


/*
    public function createTeam(){
        return view('forms.team');
    }

    public function storeTeam(Request $request){
        //return $request;
        $file_name=$this ->saveImage($request -> photo, 'team');
        //$path = $request->file('photo')->store('public/photos');

        Team::create([
            'name'=>$request->name,
            'facebook_account'=>  $request-> facebook_account,
            'instagram_account'=> $request-> instagram_account,
            'twitter_account'=>   $request-> twitter_account,
            'job_description'=>   $request-> job_description,
            'photo'=> $file_name,
        ]);

    }
/*
    public function showPortfolioByFilter(PortfolioCategory $category){
        $portfolio=$category->portfolio;
        //$portfolio->save();
        return view('eBusiness',compact('portfolio'));
    }*/

    public function  readHome(){
        $portfolios=Portfolio::all();
        $teams=Team::all();
        $portfolio=PortfolioCategory::all();


        //$teams=Team::select('id','name', 'job_description',
        //'facebook_account','twitter_account', 'instagram_account', 'photo');
        return view( 'eBusiness',compact('portfolios','teams','portfolio'));
    }
   /* public function  readTeam(){
        $teams=Team::all();
        //$teams=Team::select('id','name', 'job_description',
        //'facebook_account','twitter_account', 'instagram_account', 'photo');
        return view( 'eBusiness',compact('teams'));
    }*/





    //filter is not work
    public function filterByCategory(Request $request){
        $categoryId=$request->input('categoryId');
        $categoryName=$request->input('categoryName');

        if($categoryId == 'all'){
            $portfolio=Portfolio::all();
        }else{
            $portfolio=Portfolio::where('portfolio_category_id',$categoryId)->get();
        }

        return view('layouts.portfolio',compact('portfolio'));
    }


/*
    public function createpost(){
        return view('forms.post');
    }

    public function storePost(Request $request){
        //return $request;
        $file_name=$this ->saveImage($request -> photo, 'post');
        //$path = $request->file('photo'
        //)->store('public/photos');

        Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'employee_id'=>$request->employee_id,
            'photo'=> $file_name,
        ]);
    }*/
    /*
    public function storeComments(Request $request){

        Comment::create([
            'content'=>content,
            'article_id'=>article_id,
            'subscriper_id'=>subscriper_id,
            'created_at'=>created_at,
            'updated_at'=>updated_at

        ]);
    }*/

    /*public function readBlog(){
        $articles=Article::simplePaginate(5);

        $comments = $articles->pluck('comments')->flatten();
        $commentCount = $comments->count();

        return view('blog',compact('articles','commentCount'));
    }
    public function readBlogDetails($article_id){
        $article=Article::find($article_id);
        $comments=$article->comments()->with('user')->get();
        $commentCount = $comments->count();

        //$articles=Article::all();
        //find($article_id);
        return view('blogdetails',compact('article','comments','commentCount'));
    }*/
    // to check data that i want retrive about articles

    public function showArticles($article_id){
        $articles=Article::find($article_id);
        $comments=$articles->comments;

       dd($articles);
       // return view('welcome',compact('comment'));
    }


}
