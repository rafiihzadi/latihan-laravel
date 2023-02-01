<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\category;

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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post::slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories'=> Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function(category $category) {
    return view('category',[ 
        'title' => $category->name,
        'posts' => $category->posts,
        'category'=> $category->name
    ]);
});