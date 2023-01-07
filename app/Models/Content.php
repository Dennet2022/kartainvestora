<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'content';

    protected $fillable = ['post_id', 'content', 'image', 'image_graph', 'graph', 'sort'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
