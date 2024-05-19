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
    return view('home' ,[ "title" => "Home"]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About" ,
        "nama" => "arif abdurohim" , 
        "email" => "abduarif45@gmail.com"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Ini judul pertama",
            "slug" => "ini-judul-pertama" ,
            "author" => "Arif Abdurohim" , 
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem! Similique ut adipisci, cumque accusamus quaerat quo, at impedit architecto mollitia ipsum minima cupiditate eum modi unde eos provident aliquid praesentium. Nihil officiis neque dolorem iusto. Aliquid sapiente id eum corrupti tempore rerum impedit laboriosam quod ut voluptatem expedita ipsa nulla qui debitis perspiciatis, delectus neque velit possimus minus explicabo at dignissimos quaerat dolores. Libero laborum aperiam commodi perspiciatis praesentium, cumque molestiae! Quis quaerat error natus illo iste id. Doloremque, enim! Libero laboriosam est nulla?"
        ],
        [
            "title" => "Ini judul kedua",
            "slug" => "ini-judul-kedua" ,
            "author" => "Rifki Abdurohim" , 
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis earum, odit incidunt est, molestiae pariatur illum at consequuntur corrupti repudiandae aliquid praesentium sit facilis quisquam quos, beatae nihil nisi. Iste ducimus a earum ex modi fuga doloribus labore eius! Voluptatum minus consequuntur tenetur optio repellendus corrupti debitis repudiandae eveniet facilis ex soluta dolor a minima quo deserunt numquam culpa pariatur, neque accusamus praesentium? Quod voluptatibus exercitationem quam a iusto placeat at possimus, eligendi, facere eos deserunt. Expedita voluptas, rem ex, dolorem id officiis optio non maxime modi officia neque eos molestiae veritatis cumque nulla ut dignissimos ullam. Alias, est. Repellat in quam veniam sunt, ut officiis. Tempore laudantium nemo eos tenetur?"
        ]
        ]; 
    return view('post' ,[ 
        "title" => "Post" , 
        "posts" => $blog_post
    ]);
});


Route::get('/postd/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Ini judul pertama",
            "slug" => "ini-judul-pertama" ,
            "author" => "Arif Abdurohim" , 
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem! Similique ut adipisci, cumque accusamus quaerat quo, at impedit architecto mollitia ipsum minima cupiditate eum modi unde eos provident aliquid praesentium. Nihil officiis neque dolorem iusto. Aliquid sapiente id eum corrupti tempore rerum impedit laboriosam quod ut voluptatem expedita ipsa nulla qui debitis perspiciatis, delectus neque velit possimus minus explicabo at dignissimos quaerat dolores. Libero laborum aperiam commodi perspiciatis praesentium, cumque molestiae! Quis quaerat error natus illo iste id. Doloremque, enim! Libero laboriosam est nulla?"
        ],
        [
            "title" => "Ini judul kedua",
            "slug" => "ini-judul-kedua" ,
            "author" => "Rifki Abdurohim" , 
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis earum, odit incidunt est, molestiae pariatur illum at consequuntur corrupti repudiandae aliquid praesentium sit facilis quisquam quos, beatae nihil nisi. Iste ducimus a earum ex modi fuga doloribus labore eius! Voluptatum minus consequuntur tenetur optio repellendus corrupti debitis repudiandae eveniet facilis ex soluta dolor a minima quo deserunt numquam culpa pariatur, neque accusamus praesentium? Quod voluptatibus exercitationem quam a iusto placeat at possimus, eligendi, facere eos deserunt. Expedita voluptas, rem ex, dolorem id officiis optio non maxime modi officia neque eos molestiae veritatis cumque nulla ut dignissimos ullam. Alias, est. Repellat in quam veniam sunt, ut officiis. Tempore laudantium nemo eos tenetur?"
        ]
    ];
    $post = [] ; 
    foreach($blog_post as $row){
        if($row['slug'] === $slug){
            $post = $row ; 
        }
    }
    return view('postd' ,[
        "title" => "Detail Blog", 
        "post" => $post
    ]);
});