<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::latest()->get();

        return view('admin.pages.notices', [
            'notices' => $notices,
        ]);
    }

    public function destroy($id)
    {
        Notice::findOrFail($id)?->delete();

        return redirect()->route('admin.notices.index');
    }
}
