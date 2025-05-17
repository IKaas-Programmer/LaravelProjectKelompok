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

    public function articles()
    {
        return $this->belongsTo(Articles::class, 'article_id');
    }

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function comments()
    {
        return $this->morphMany(\App\Models\comments::class, 'commentable');
    }
}