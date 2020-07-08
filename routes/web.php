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
/*Route::get('/', function () {
    //return view('welcome');
      //return 'Hello world';
     // return ["car","Bike"];
});
Route::get('/welcome', function () {
    return view('welcome');
    //return 'Hello world';
});

Route::get('laracast', function()
{
    return view('laracast');
});
Route::get('/', function(){
    $name = request('name');
    return view('laracast',[
        'name'=>$name
    ]});

});
Route::get('/posts/{post}', function(){
  return view('post');

});*/

Route::get('/posts/{post}', function($post)
{
    $posts=[
        'get'=> 'Loads views into the web browser',
        'return'=>'returns the necessary'
    ];
    if(! array_key_exists($post,$posts)){
        abort(404,'SORRY NOT FOUND');
    }
    return view('post',[
        'post'=>$posts[$post] 
    ]);
}
);

//Route::get('/posts/{post}', 'ostsController@show');