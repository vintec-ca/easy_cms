<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::paginate(5);
        return view('home', compact('posts', 'categories', 'tags'));
    }

    public function view($slug)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('view', compact('post', 'categories', 'tags'));
    }

    public function category_filter($slug)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->paginate(5);
        return view('home', compact('posts', 'categories', 'tags'));
    }

    public function tag_filter($slug)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->paginate(5);
        return view('home', compact('posts', 'categories', 'tags'));
    }
}
