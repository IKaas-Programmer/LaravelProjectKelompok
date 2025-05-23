<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class articles_comments extends Model
{
    protected $fillable = [
        'user_id',
        'comment',
        'articles_id',
    ];

    public function articles()
    {
        return $this->belongsTo(Articles::class);
    }
}