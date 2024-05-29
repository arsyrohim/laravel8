<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Arif Abdurohim' , 
            'email' => 'abduarif45@gmail.com' , 
            'password' => bcrypt('12345')
        ]);
        
        User::create([
            'name' => 'Rifki Abdurohim' , 
            'email' => 'Rifkiadurohim@gmail.com' , 
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'nama' => 'Programing', 
            'slug' => 'programing'
        ]);

        Category::create([
            'nama' => 'Web Design', 
            'slug' => 'web-design'
        ]);

        Post::create([
            'title' => 'Judul Pertama', 
            'slug' => 'judul-pertama', 
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis harum hic magni optio cumque explica',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed impedit odio distinctio! Tempora laudantium recusandae temporibus sunt officia? Deserunt praesentium consequuntur saepe corrupti sunt possimus, non similique placeat obcaecati dolorum autem laboriosam fugit officia modi nulla quo repellat repellendus natus dignissimos. Officiis, quo minima excepturi eligendi corporis reiciendis vitae, ut voluptates ipsa nihil laudantium laborum natus facilis accusamus porro aliquid libero perspiciatis cumque repudiandae dolores temporibus esse iste. Cumque vitae qui ratione, magni itaque ea explicabo maiores sint omnis quasi atque voluptatem? Nisi architecto vero deleniti eum corrupti natus accusamus vel molestias officia neque, sed earum commodi quo sequi iusto maxime quis? Excepturi explicabo aut vitae possimus modi tempora cupiditate dolorum.', 
            'category_id' => 1, 
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua', 
            'slug' => 'judul-kedua', 
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis harum hic magni optio cumque explica',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed impedit odio distinctio! Tempora laudantium recusandae temporibus sunt officia? Deserunt praesentium consequuntur saepe corrupti sunt possimus, non similique placeat obcaecati dolorum autem laboriosam fugit officia modi nulla quo repellat repellendus natus dignissimos. Officiis, quo minima excepturi eligendi corporis reiciendis vitae, ut voluptates ipsa nihil laudantium laborum natus facilis accusamus porro aliquid libero perspiciatis cumque repudiandae dolores temporibus esse iste. Cumque vitae qui ratione, magni itaque ea explicabo maiores sint omnis quasi atque voluptatem? Nisi architecto vero deleniti eum corrupti natus accusamus vel molestias officia neque, sed earum commodi quo sequi iusto maxime quis? Excepturi explicabo aut vitae possimus modi tempora cupiditate dolorum.', 
            'category_id' => 1, 
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Tiga', 
            'slug' => 'judul-tiga', 
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis harum hic magni optio cumque explica',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed impedit odio distinctio! Tempora laudantium recusandae temporibus sunt officia? Deserunt praesentium consequuntur saepe corrupti sunt possimus, non similique placeat obcaecati dolorum autem laboriosam fugit officia modi nulla quo repellat repellendus natus dignissimos. Officiis, quo minima excepturi eligendi corporis reiciendis vitae, ut voluptates ipsa nihil laudantium laborum natus facilis accusamus porro aliquid libero perspiciatis cumque repudiandae dolores temporibus esse iste. Cumque vitae qui ratione, magni itaque ea explicabo maiores sint omnis quasi atque voluptatem? Nisi architecto vero deleniti eum corrupti natus accusamus vel molestias officia neque, sed earum commodi quo sequi iusto maxime quis? Excepturi explicabo aut vitae possimus modi tempora cupiditate dolorum.', 
            'category_id' => 2, 
            'user_id' => 2
        ]);




    }
}
