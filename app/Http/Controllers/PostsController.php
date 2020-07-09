<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\table1;


class PostsController extends Controller
{
    public function show($name)
    {
       
      //  $post=DB::table('table1')->where('name', $name)->first(); //Fetching data from DB
       
      //$post = table1::where('name', $name)->first();
        $post=table1::all();
        dd($post);
       if(! $post)
       {
           abort('404');
       }

    return view('post',[                        
        'post'=>$posts[$post] 
    ]);
    }
}

    

