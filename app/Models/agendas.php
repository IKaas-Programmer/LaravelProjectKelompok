<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agendas extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\Users::class, 'user_id');
    }

    public function comments()
    {
        return $this->morphMany(comments::class, 'commentable');
    }
}