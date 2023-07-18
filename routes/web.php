<?php

use Illuminate\Support\Facades\Auth;
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
//Route::get('/{article_id}','App\Http\Controllers\Admin\CrudController@showArticles');

//Route to enter member of team
Route::get('/create-team','App\Http\Controllers\Admin\CrudController@createTeam');
Route::post('/store-team','App\Http\Controllers\Admin\CrudController@storeTeam')
->name('team.store');
//Route::get('/data','App\Http\Controllers\Admin\CrudController@readTeam');

//Route to enter portfolio
Route::get('/create-portfolio','App\Http\Controllers\Admin\CrudController@createPortfolio');
Route::post('/store-portfolio','App\Http\Controllers\Admin\CrudController@storePortfolio')
    ->name('portfolio.store');


Route::group(['prefix'=>'eBusiness'],function(){
    Route::get('/home','App\Http\Controllers\Admin\CrudController@readHome');
    Route::get('/blog','App\Http\Controllers\BlogController@readBlog')
        ->name('blog');
    Route::get('/blogdetails/{article_id}','App\Http\Controllers\BlogDetailsController@readBlogDetails')
            ->name('blogdetails');
    Route::post('/blogdetails/{article_id}','App\Http\Controllers\CommentController@store')
        ->middleware('auth')->name('comment.store');
    Route::get('/blog/{category?}/{tag?}', 'App\Http\Controllers\BlogController@readBlog')->name('blog.index');



});
/*
Route::middleware('auth')->group(function (){
    Route::post('/blogdetails/{article_id}',[\App\Http\Controllers\CommentController::class,'store'])
        ->name('comment.store');
});*/

//route to add posts
Route::get('/create-post','App\Http\Controllers\Admin\CrudController@createPost');
Route::post('/store-post','App\Http\Controllers\Admin\CrudController@storePost')
    ->name('post.store');


// to check relationship between porfoliocategory and portfolio
/*
Route::get('/test',function(){
    $portfoloi_cat=\App\Models\PortfolioCategory::find(1);
    $portfolio=$portfoloi_cat->portfolio;
   return dd($portfolio);
});*/

//Route::post('/blog','App\Http\Controllers\Admin\crudController@storeComments')->name('comment.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
