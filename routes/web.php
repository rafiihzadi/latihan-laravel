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
    return view (' home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view(' about', [
        "title" => "About",
        "name" => "Ravi Hebat",
        "email" => "rafi_ihzadi@gmail.com",
        "image" => "wuifu.jpg"
    ]);
}); 


Route::get('/blog', function () {
    $blog_posts =[

        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ravi hebat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi beatae minima veritatis dolorem iste earum odit exercitationem, voluptas sed mollitia quidem pariatur perferendis ratione reiciendis possimus sint repellat fuga saepe omnis tenetur corrupti! Dolores vel, corrupti fuga ipsum commodi voluptas temporibus necessitatibus minus doloremque sunt, tempora ducimus alias quod sed, nesciunt laudantium nihil! Accusantium vero, atque neque culpa quisquam sed iusto ex sequi impedit explicabo accusamus aut? Voluptatibus nostrum, iste consequatur eius autem ab sunt qui velit ullam corrupti fuga."
        ],
        [
            "title" => "Judul Post Keddua",
            "slug" => "judul-post-kedua",
            "author" => "rafi ihza",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minus, laudantium, dolores earum, veritatis numquam optio quis molestias amet quos alias doloremque saepe nostrum! Officiis adipisci, illo voluptatum dolore minus culpa harum saepe eos sunt est voluptatibus placeat fuga repellat! Eveniet iusto accusamus nulla ullam! Quae cumque sapiente rem, officia id assumenda nesciunt provident expedita corrupti esse numquam laborum repudiandae aliquam, vitae, cupiditate molestias accusamus enim quo sit reprehenderit culpa est? Nostrum vel quos tenetur aspernatur at ipsum incidunt impedit culpa consequuntur sed natus cumque quod distinctio debitis exercitationem enim, illo officia! Excepturi, odio nesciunt ipsam illum velit dolorum tenetur."
        ],
         
    ];
    
    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts =[

        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ravi hebat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi beatae minima veritatis dolorem iste earum odit exercitationem, voluptas sed mollitia quidem pariatur perferendis ratione reiciendis possimus sint repellat fuga saepe omnis tenetur corrupti! Dolores vel, corrupti fuga ipsum commodi voluptas temporibus necessitatibus minus doloremque sunt, tempora ducimus alias quod sed, nesciunt laudantium nihil! Accusantium vero, atque neque culpa quisquam sed iusto ex sequi impedit explicabo accusamus aut? Voluptatibus nostrum, iste consequatur eius autem ab sunt qui velit ullam corrupti fuga."
        ],
        [
            "title" => "Judul Post Keddua",
            "slug" => "judul-post-kedua",
            "author" => "rafi ihza",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minus, laudantium, dolores earum, veritatis numquam optio quis molestias amet quos alias doloremque saepe nostrum! Officiis adipisci, illo voluptatum dolore minus culpa harum saepe eos sunt est voluptatibus placeat fuga repellat! Eveniet iusto accusamus nulla ullam! Quae cumque sapiente rem, officia id assumenda nesciunt provident expedita corrupti esse numquam laborum repudiandae aliquam, vitae, cupiditate molestias accusamus enim quo sit reprehenderit culpa est? Nostrum vel quos tenetur aspernatur at ipsum incidunt impedit culpa consequuntur sed natus cumque quod distinctio debitis exercitationem enim, illo officia! Excepturi, odio nesciunt ipsam illum velit dolorum tenetur."
        ],
         
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;

        }
    }

    // return view('post'[
    //     "title" => "Single Post",
    //     "post" => $new_post
    // ]);
});