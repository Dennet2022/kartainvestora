<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.pages.categories', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect(route('admin.categories.index'));
    }

    public function edit(Request $request)
    {

        $category = Category::find($request->category);

        return view('admin.pages.categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(Request $request)
    {
        $categoryId = $request->category;


        $category = Category::find($categoryId);
        $category->update(
            [
                'name' => $request->name,
                'slug' => $request->slug,
            ]
        );

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Request $request)
    {
        $categoryId = $request->category;
        $category = Category::find($categoryId);
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
