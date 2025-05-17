<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class articlescomments extends Model
{
    protected $fillable = [
        'id',
        'comment',
        'article_id',
    ];

    public function article()
    {
        return $this->belongsTo(Articles::class, 'article_id');
    }
}