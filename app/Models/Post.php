<?php

namespace App\Models;

class Post
{
   private static  $blog_post = [
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
    
    public static function all() {
        return collect(self::$blog_post) ;
    }

    public static function find($slug){
        $post = collect(static::all()); 

        return $post->firstWhere('slug' , $slug);
    }


 
}
