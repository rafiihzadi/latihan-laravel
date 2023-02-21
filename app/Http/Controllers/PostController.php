<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

class PostController extends Controllers
{
    public function index()
    {
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in' . $category->name;
        }

        if(request('author')){
            $author = User :: firstWhere('username', request ('author'));
            $title = 'by' . $author -> name;
        }
        


        return view ('blogs', [
            "title" => "All Posts" . $title,
            "active" => 'blogs',
            "posts" => Post:: latest()->filter(request(['search', 'category','author']))
            ->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('singelpost',[
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}  