<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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

        $checkExistsSlug = Post::where('slug', $request->slug)->count();

        if ($checkExistsSlug) {
            die('This slug already exists');
        }

        $post = Post::create(
            [
                'category_id' => $request->category,
                'slug' => $request->slug ?? Str::random(16),
                'title' => $request->title ?? Str::random(16),
                'description' => $request->description ?? Str::random(16),
                'image' => $fileData ? 'storage/images/' . $filename : '',
            ]
        );

        if (null !== $post && !empty($request->blocks)) {
            foreach ($request->blocks as $key => $block) {
                foreach ($block as $type => $value) {
                    $image = null;
                    $imageGraph = null;
                    $graph = null;
                    $content = null;

                    if ($type == 'image') {
                        $uuid = Uuid::uuid4()->toString();
                        $filename = $uuid . '.jpg';

                        $fileData = $value;
                        if($fileData) {
                            $i = \Intervention\Image\Facades\Image::make($fileData);
                            $i->save($path . $filename);
                            $image = 'storage/images/' . $filename;
                        }
                    }

                    if ($type == 'image_graph') {
                        $uuid = Uuid::uuid4()->toString();
                        $filenameGraph = $uuid . '.jpg';

                        $fileDataGraph = $value;
                        if($fileDataGraph) {
                            $i = \Intervention\Image\Facades\Image::make($fileDataGraph);
                            $i->save($path . $filenameGraph);
                            $imageGraph = 'storage/images/' . $filenameGraph;
                        }
                    }

                    if ($type == 'graph') {
                        $graph = $value;
                    }

                    if ($type == 'content') {
                        $content = $value;
                    }

                    try {
                        Content::create([
                            'post_id' => $post->id,
                            'image' => $image,
                            'image_graph' => $imageGraph,
                            'graph' => $graph,
                            'sort' => $key,
                            'content' => $content,
                        ]);
                    } catch (\Exception $e) {
                        die($e->getMessage());
                    }
                }
            }
        }

        if ($request->deleteImage == 1) {
            $post->update(
                [
                    'image' => '',
                ]
            );
        } else {
            if ($fileData) {
                $post->update(
                    [
                        'image' => 'storage/images/' . $filename,
                    ]
                );
            }
        }

        // ----

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

        $post = Post::find($postId);
        $post->update(
            [
                'category_id' => $request->category,
                'slug' => $request->slug,
                'title' => $request->title,
            ]
        );

        if (null !== $post && !empty($request->blocks)) {
//            foreach (Content::where('post_id', $post->id)->get() as $c) {
//                $c->delete();
//            }

            $lastKey = 0;

            foreach ($request->blocks as $key => $block) {
                foreach ($block as $type => $value) {
                    $checkExists = Content::where('post_id', $post->id)
                        ->where('sort', $key)
                        ->first();

                    $image = null;
                    $imageGraph = null;
                    $graph = null;
                    $content = null;

                    if ($type == 'image') {
                        $uuid = Uuid::uuid4()->toString();
                        $filename = $uuid . '.jpg';

                        $fileData = $value;
                        if($fileData) {
                            $i = \Intervention\Image\Facades\Image::make($fileData);
                            $i->save($path . $filename);
                            $image = 'storage/images/' . $filename;
                        }
                    }

                    if ($type == 'image_graph') {
                        $uuid = Uuid::uuid4()->toString();
                        $filenameGraph = $uuid . '.jpg';

                        $fileDataGraph = $value;
                        if($fileDataGraph) {
                            $i = \Intervention\Image\Facades\Image::make($fileDataGraph);
                            $i->save($path . $filenameGraph);
                            $imageGraph = 'storage/images/' . $filenameGraph;
                        }
                    }

                    if ($type == 'graph') {
                        $graph = $value;
                    }

                    if ($type == 'content') {
                        $content = $value;
                    }

                    try {
                        if (!empty($checkExists)) {
                            $checkExists->graph = null;
                            $checkExists->image_graph = null;
                            $checkExists->content = null;
                            $checkExists->save();

                            if (!empty($graph)) {
                                $checkExists->graph = $graph;
                                $checkExists->image_graph = $imageGraph;
                                $checkExists->content = $content;
                                $checkExists->save();
                            }

                            if (!empty($imageGraph)) {
                                $checkExists->image_graph = $imageGraph;
                                $checkExists->content = $content;
                                $checkExists->graph = $graph;
                                $checkExists->save();
                            }

                            if (!empty($content)) {
                                $checkExists->content = $content;
                                $checkExists->graph = $graph;
                                $checkExists->image_graph = $imageGraph;
                                $checkExists->save();
                            }
                        } else {
                            Content::create([
                                'post_id' => $post->id,
                                'image' => $image,
                                'image_graph' => $imageGraph,
                                'graph' => $graph,
                                'sort' => $key,
                                'content' => $content,
                            ]);
                        }
                    } catch (\Exception $e) {
                        die($e->getMessage());
                    }
                }

                $lastKey = $key;
            }

            $checkOtherExists = Content::where('post_id', $post->id)
                ->where('sort', '>', $lastKey)
                ->get();

            foreach ($checkOtherExists as $checkOtherExist) {
                $checkOtherExist->delete();
            }
        }

        if ($request->deleteImage == 1) {
            $post->update(
                [
                    'image' => '',
                ]
            );
        } else {
            if ($fileData) {
                $post->update(
                    [
                        'image' => 'storage/images/' . $filename,
                    ]
                );
            }
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
