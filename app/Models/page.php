<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'user_id',
    ];

    public function articles() {

        return $this->belongsTo(Articles::class, 'article_id');
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function comments()
    {
        return $this->morphMany(\App\Models\comments::class, 'commentable');
    }
}
// Compare this snippet from app/Models/users.php: