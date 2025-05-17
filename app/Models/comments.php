<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $fillable = [
        'id',
        'comment',
        'commentable_id',
        'commentable_type',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }
}