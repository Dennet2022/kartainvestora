<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'content', 'image', 'description', 'category_id', 'image_graph', 'graph'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}