<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class ImageController extends Controller
{
    public function destroy(Request $request)
    {
        $imageId = $request->image;
        $image = Image::find($imageId);
        $image->delete();

        return redirect()->back();
    }
}
