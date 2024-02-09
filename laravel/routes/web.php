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
        "image" => "walker.jpeg",
    ]);
});

Route::get('/blog', function () {
    return view('blog',[
        "title" => "Blog"
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