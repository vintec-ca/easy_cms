<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $posts = Post::paginate(5);
        return view('home', compact('posts', 'categories'));
    }

    public function view($slug)
    {
        $categories = Category::all();
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('view', compact('post', 'categories'));
    }
}
