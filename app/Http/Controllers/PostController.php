<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User; 


class PostController extends Controller
{
    public function index(){ 
            $title = '' ; 
            
            if(request('category')){
                $category = Category::firstWhere('slug' , request('category'));
                $title = ' in ' . $category->nama ; 
            }

            if(request('author')){
                $author = User::firstWhere('username' , request('author'));
                $title = ' by ' . $author->name ; 
            }
        
            return view('post' ,[ 
                "title" => "Post All" . $title , 
                "active" => "post",
               // "posts" => Post::all()
               "posts" => Post::with(['user' , 'category'])->latest()->filter(request(['search' , 'category' ,'author']))->paginate(7)->withQueryString()
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
