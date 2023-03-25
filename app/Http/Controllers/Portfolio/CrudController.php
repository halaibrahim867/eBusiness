<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Team;
use App\Traits\dataTrait;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
    use dataTrait;
    public function create(){
        return view('forms.portfolio');
    }

    public function store(Request $request){
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

    public function  read(){
        $teams=Team::all();
        //$teams=Team::select('id','name', 'job_description',
        //'facebook_account','twitter_account', 'instagram_account', 'photo');
        return view( 'eBusiness',compact('teams'));
    }


}
