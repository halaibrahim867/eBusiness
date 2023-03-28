<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('eBusiness');
});

//Route to enter member of team
Route::get('/create-team','App\Http\Controllers\Admin\CrudController@createTeam');
Route::post('/store-team','App\Http\Controllers\Admin\CrudController@storeTeam')
->name('team.store');
//Route::get('/data','App\Http\Controllers\Admin\CrudController@readTeam');

//Route to enter portfolio
Route::get('/create-portfolio','App\Http\Controllers\Admin\CrudController@createPortfolio');
Route::post('/store-portfolio','App\Http\Controllers\Admin\CrudController@storePortfolio')
    ->name('portfolio.store');

Route::get('/data','App\Http\Controllers\Admin\CrudController@read');




// to check relationship between porfoliocategory and portfolio
/*
Route::get('/test',function(){
    $portfoloi_cat=\App\Models\PortfolioCategory::find(1);
    $portfolio=$portfoloi_cat->portfolio;
   return dd($portfolio);
});*/


