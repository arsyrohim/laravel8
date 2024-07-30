<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){   
        
            return view('post' ,[ 
                "title" => "Post All" , 
                "active" => "post",
               // "posts" => Post::all()
               "posts" => Post::with(['user' , 'category'])->latest()->filter(request(['search']))->get()
            ]);
        }

    public function show(Post $post){         
   
            return view('postd' ,[
                "title" => "Detail Blog", 
                "active" => "post",
                "post" => $post
            ]);
        
    }
    
}
