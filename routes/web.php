<?php

use App\Http\Controller\AdminCategoryController;
use App\Models\Category;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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
    return view (' home',[
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view(' about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Ravi Hebat",
        "email" => "rafi_ihzadi@gmail.com",
        "image" => "wuifu.jpg"
    ]);
}); 

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post::slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories',[
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
    
});


Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category','author'),
    ]);
});

 Route::get('/author/{author:username}', function(User $author){
    return view('posts',[
        'title' => "Post By Author : $author->name",
        'posts'=> $author->posts->load('category','author'),
    ]);
 });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');