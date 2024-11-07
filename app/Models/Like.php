<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'count',
        'IP'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
