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
        $path = storage_path() . '/app/public/images/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $uuid = Uuid::uuid4()->toString();
        $filename = $uuid . '.jpg';

        $fileData = $request->hasFile('image') && $request->file('image')->isValid() ? $request->file('image') : $request->get('image');
        if($fileData) {
            $image = \Intervention\Image\Facades\Image::make($fileData);
            $image->save($path . $filename);
        }

        $uuid = Uuid::uuid4()->toString();
        $filenameGraph = $uuid . '.jpg';

        $fileDataGraph = $request->hasFile('image_graph') && $request->file('image_graph')->isValid() ? $request->file('image_graph') : $request->get('image_graph');
        if($fileDataGraph) {
            $image = \Intervention\Image\Facades\Image::make($fileDataGraph);
            $image->save($path . $filenameGraph);
        }

        Post::create(
            [
                'category_id' => $request->category,
                'slug' => $request->slug,
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request['content'],
                'image' => $fileData ? 'storage/images/' . $filename : '',
                'image_graph' => $fileDataGraph ? 'storage/images/' . $filenameGraph : '',
                'graph' => $request->graph,
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

        $path = storage_path() . '/app/public/images/';

        $uuid = Uuid::uuid4()->toString();
        $filename = $uuid . '.jpg';

        $fileData = $request->hasFile('image') && $request->file('image')->isValid() ? $request->file('image') : $request->get('image');
        if($fileData) {
            $image = \Intervention\Image\Facades\Image::make($fileData);
            $image->save($path . $filename);
        }

        $uuid = Uuid::uuid4()->toString();
        $filenameGraph = $uuid . '.jpg';

        $fileDataGraph = $request->hasFile('image_graph') && $request->file('image_graph')->isValid() ? $request->file('image_graph') : $request->get('image_graph');
        if($fileDataGraph) {
            $image = \Intervention\Image\Facades\Image::make($fileDataGraph);
            $image->save($path . $filenameGraph);
        }

        $post = Post::find($postId);
        $post->update(
            [
                'category_id' => $request->category,
                'slug' => $request->slug,
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request['content'],
                'graph' => $request->graph,
            ]
        );

        if($fileData) {
            $post->update(
                [
                    'image' => 'storage/images/' . $filename,
                ]
            );
        }

        if($fileDataGraph) {
            $post->update(
                [
                    'image_graph' => 'storage/images/' . $filenameGraph
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
