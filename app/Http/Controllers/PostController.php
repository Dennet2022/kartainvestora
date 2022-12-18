<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with('category')->get();

        return view('home', [
            'posts' => $posts,
        ]);
    }

    public function postsWithCategory(Request $request)
    {
        $category = $request->category;

        $posts = Post::with('category')->whereHas('category', function($q) use($category) {
            $q->where('slug', $category);
        })->get();

        return view('home', [
            'posts' => $posts,
            'category' => $category
        ]);
    }

    public function post(Request $request)
    {
        $slug = $request->slug;

        $post = Post::with('category')->where('slug', $slug)->first();

        return view('post', [
            'post' => $post,
        ]);
    }
}
