<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}