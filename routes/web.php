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
/*Route::get('/', function () {         //get request to home page
    //return view('welcome');           //request to the view
      //return 'Hello world';
     // return ["car","Bike"];          //returning an array
});
Route::get('/welcome', function () {
    return view('welcome');    
    //return 'Hello world';
});

Route::get('laracast', function()       //laracast view created and viewed in the browser
{
    return view('laracast');
});
Route::get('/', function(){             //passing data through request string
    $name = request('name');
    return view('laracast',[            
        'name'=>$name
    ]});

});
Route::get('/posts/{post}', function(){ //Route accepting wildcard value or any value
  return view('post');

});*/

Route::get('/posts/{post}', function($post)
{
    $posts=[                                           //Data store
        'get'=> 'Loads views into the web browser',
        'return'=>'returns the necessary'
    ];
    if(! array_key_exists($post,$posts)){             //Accesseing post doesnt exist
        abort(404,'SORRY NOT FOUND');
    }
    return view('post',[                        
        'post'=>$posts[$post] 
    ]);
}
);

//Route::get('/posts/{post}', 'postsController@show');   //