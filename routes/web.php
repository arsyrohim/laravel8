<?php

use App\Models\Post;
use App\Models\User; 
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home' ,[ 
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About" ,
        "active" => "about",
        "nama" => "arif abdurohim" , 
        "email" => "abduarif45@gmail.com"
    ]);
});

Route::get('/blog' , [PostController::class , 'index']);


Route::get('/postd/{post:slug}',[PostController::class , 'show'] );
Route::get('/categories' , function(){
    return view('categories' , [
        'title' => 'Post Category' ,
        'active' => 'categories' ,
        'categories' => Category::all()
    ]);
}); 

Route::get('/categories/{category:slug}' , function(Category $category){
    return view('post' , [
        'title' => " Post By Category : $category->nama " ,
        'active' => 'categories' , 
        'posts' => $category->posts->load(['user' , 'category'])
    ]);

});


Route::get('/authors/{author:username}' , function(User $author){
    return view('post' , [
        'title' => "Post By Author : $author->name " , 
        'active' => 'post' ,
        'posts' => $author->posts->load(['user' , 'category'])
    ]);

});

Route::get('/login' , [LoginController::class , 'index']) ; 

Route::get('/register' , [RegisterController::class , 'index']) ; 

Route::post('/register' , [RegisterController::class , 'store']); 