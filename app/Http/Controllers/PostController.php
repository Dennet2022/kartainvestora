<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with('category')->get();
        $categories = Category::all();

        return view('home', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function postsWithCategory(Request $request)
    {
        $categorySlag = $request->category;

        $posts = Post::with('category')->whereHas('category', function($q) use($categorySlag) {
            $q->where('slug', $categorySlag);
        })->get();

        $categories = Category::all();

        return view('home', [
            'posts' => $posts,
            'categorySlag' => $categorySlag,
            'categories' => $categories
        ]);
    }

    public function post(Request $request)
    {
        $slug = $request->slug;

        $post = Post::with('category')->where('slug', $slug)->first();
        $categories = Category::all();

        return view('post', [
            'post' => $post,
            'categories' => $categories
        ]);
    }
}
