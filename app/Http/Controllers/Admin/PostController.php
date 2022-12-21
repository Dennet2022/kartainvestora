<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();

        return view('admin.pages.posts', [
            'posts' => $posts,
        ]);
    }

    public function create(Request $request)
    {
        $categories = Category::all();

        return view('admin.pages.posts.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $uuid = Uuid::uuid4()->toString();
        $filename = $uuid . '.jpg';
        $path = storage_path() . '/app/public/images/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $fileData = $request->hasFile('image') && $request->file('image')->isValid() ? $request->file('image') : $request->get('image');
        if($fileData) {
            $image = \Intervention\Image\Facades\Image::make($fileData);
            $image->save($path . $filename);
        }

        Post::create(
            [
                'category_id' => $request->category,
                'slug' => $request->slug,
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request['content'],
                'image' => $fileData ? 'storage/images/' . $filename : '',
            ]
        );

        return redirect(route('admin.posts.index'));
    }

    public function edit(Request $request)
    {

        $post = Post::with('category')->find($request->post);
        $categories = Category::all();

        return view('admin.pages.posts.edit', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request)
    {
        $postId = $request->post;
        $uuid = Uuid::uuid4()->toString();
        $filename = $uuid . '.jpg';
        $path = storage_path() . '/app/public/images/';
        $fileData = $request->hasFile('image') && $request->file('image')->isValid() ? $request->file('image') : $request->get('image');
        if($fileData) {
            $image = \Intervention\Image\Facades\Image::make($fileData);
            $image->save($path . $filename);
        }

        $post = Post::find($postId);
        $post->update(
            [
                'category_id' => $request->category,
                'slug' => $request->slug,
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request['content'],
            ]
        );

        if($fileData) {
            $post->update(
                [
                    'image' => 'storage/images/' . $filename,
                ]
            );
        }

        return redirect(url($post->slug));
    }

    public function destroy(Request $request)
    {
        $postId = $request->post;
        $post = Post::find($postId);
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
