<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Walker Simanjuntak",
        "email" => "walkervalentinuss@gmail.com",
        "image" => "wvs.jpg",
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Tulisan Pertama",
            "slug" => "tulisan-pertama",
            "author" => "Walker Simanjuntak",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, deserunt commodi? Consequuntur, cum, 
            ullam tenetur quasi illum quibusdam est cumque tempore quidem eveniet architecto ipsa nihil quos enim unde, cupiditate 
            ratione explicabo fugiat praesentium at magni ducimus quo quod dolore? Iste modi cupiditate sit consectetur eaque maxime 
            aperiam vel officia et beatae asperiores magnam sequi, architecto dolores ratione a laudantium provident voluptatibus unde 
            exercitationem earum eveniet deserunt ducimus repellendus. Asperiores vero molestiae expedita amet. Exercitationem tempora nihil at corporis! Animi?"
        ],
        [
            "title" => "Tulisan Kedua",
            "slug" => "tulisan-kedua",
            "author" => "Valentinus Simanjuntak",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, deserunt commodi? Consequuntur, cum, 
            ullam tenetur quasi illum quibusdam est cumque tempore quidem eveniet architecto ipsa nihil quos enim unde, cupiditate 
            ratione explicabo fugiat praesentium at magni ducimus quo quod dolore? Iste modi cupiditate sit consectetur eaque maxime 
            aperiam vel officia et beatae asperiores magnam sequi, architecto dolores ratione a laudantium provident voluptatibus unde 
            exercitationem earum eveniet deserunt ducimus repellendus. Asperiores vero molestiae expedita amet. Exercitationem tempora nihil at corporis! Animi? 
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam iste consequatur reiciendis! Inventore unde vitae architecto 
            eum numquam hic accusantium?"
        ]
    ];
    return view('blog',[
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/portofolio', function(){
    return view('portofolio', [
        "title" => "Portofolio",
        "name" => "Walker Simanjuntak",
        "email" => "walkervalentinuss@gmail.com",
        "image" => "walker.jpeg",
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Tulisan Pertama",
            "slug" => "tulisan-pertama",
            "author" => "Walker Simanjuntak",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, deserunt commodi? Consequuntur, cum, 
            ullam tenetur quasi illum quibusdam est cumque tempore quidem eveniet architecto ipsa nihil quos enim unde, cupiditate 
            ratione explicabo fugiat praesentium at magni ducimus quo quod dolore? Iste modi cupiditate sit consectetur eaque maxime 
            aperiam vel officia et beatae asperiores magnam sequi, architecto dolores ratione a laudantium provident voluptatibus unde 
            exercitationem earum eveniet deserunt ducimus repellendus. Asperiores vero molestiae expedita amet. Exercitationem tempora nihil at corporis! Animi?"
        ],
        [
            "title" => "Tulisan Kedua",
            "slug" => "tulisan-kedua",
            "author" => "Valentinus Simanjuntak",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, deserunt commodi? Consequuntur, cum, 
            ullam tenetur quasi illum quibusdam est cumque tempore quidem eveniet architecto ipsa nihil quos enim unde, cupiditate 
            ratione explicabo fugiat praesentium at magni ducimus quo quod dolore? Iste modi cupiditate sit consectetur eaque maxime 
            aperiam vel officia et beatae asperiores magnam sequi, architecto dolores ratione a laudantium provident voluptatibus unde 
            exercitationem earum eveniet deserunt ducimus repellendus. Asperiores vero molestiae expedita amet. Exercitationem tempora nihil at corporis! Animi? 
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam iste consequatur reiciendis! Inventore unde vitae architecto 
            eum numquam hic accusantium?"
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});