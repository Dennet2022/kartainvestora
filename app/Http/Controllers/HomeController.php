<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function notice(Request $request, Authenticatable $user)
    {
        $notice = htmlentities(strip_tags(trim($request->notice)));

        Notice::create([
            'user_id' => $user->id,
            'notice'  => $notice,
        ]);

        session()->flash('sweetSuccess', 'Ваше сообщение отправлено Администратору');

        return back();
    }
}
