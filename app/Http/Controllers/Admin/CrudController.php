<?php

namespace App\Http\Controllers\Admin;
use App\Traits\dataTrait;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    use dataTrait;
    public function create(){
        return view('forms.team');
    }

    public function store(Request $request){
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

    public function  read(){
        $teams=Team::all();
        //$teams=Team::select('id','name', 'job_description',
        //'facebook_account','twitter_account', 'instagram_account', 'photo');
        return view( 'eBusiness',compact('teams'));
    }


}
