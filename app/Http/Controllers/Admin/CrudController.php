<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;

use App\Models\PortfolioCategory;
use App\Models\Team;
use App\Traits\dataTrait;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
    use dataTrait;
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

    }



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

    public function  read(){
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


}
