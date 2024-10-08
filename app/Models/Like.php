<?php
// app/Models/Like.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_like';

    protected $fillable = [
        'id_post',
        'id',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post', 'id_post');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
