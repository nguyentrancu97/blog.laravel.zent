<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::query()->paginate(5);
        return view('index', compact('posts'));
    }

    public function detail($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.detail', ['post' => $post]);
    }

    public function blog()
    {
        $posts = Post::query()->take(5)->get();
        return view('posts.index', compact('posts'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->paginate(2);
        return view('categories.category', ['posts' => $posts]);
    }


}
