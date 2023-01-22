<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.pages.users', [
            'users' => $users,
        ]);
    }

    public function edit(Request $request)
    {

        $user = User::find($request->user);

        return view('admin.pages.users.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $userId = $request->user;


        $user = User::find($userId);
        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'premium' => $request->premium ?? 0,
            ]
        );

        return redirect()->route('admin.users.index');
    }

//    public function destroy(Request $request)
//    {
//        $categoryId = $request->category;
//        $category = Category::find($categoryId);
//        $category->delete();
//
//        return redirect()->route('admin.categories.index');
//    }
}
