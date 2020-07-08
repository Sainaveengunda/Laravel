
<?php

namespace App\Htttp\Controllers;

class PostsController
{
    public function show($post)
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
}

