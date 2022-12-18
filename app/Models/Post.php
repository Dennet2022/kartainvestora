<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'content', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
