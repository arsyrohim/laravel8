<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home' ,[ "title" => "Home"]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About" ,
        "nama" => "arif abdurohim" , 
        "email" => "abduarif45@gmail.com"
    ]);
});

Route::get('/blog' , [PostController::class , 'index']);


Route::get('/postd/{post:slug}',[PostController::class , 'show'] );
Route::get('/categories' , function(){
    return view('categories' , [
        'title' => 'Post Category' , 
        'categories' => Category::all()
    ]);
}); 

Route::get('/categories/{category:slug}' , function(Category $category){
    return view('category' , [
        'title' => $category->nama , 
        'posts' => $category->posts 
    ]);

});


Route::get('/authors/{author:username}' , function(User $author){
    return view('post' , [
        'title' => 'Daftar Halaman Blog' , 
        'posts' => $author->posts
    ]);

});