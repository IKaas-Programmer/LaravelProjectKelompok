<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pagecomments extends Model
{
    protected $fillable = [
        'id',
        'comment',
        'page_id',
    ];

    public function page()
    {
        return $this->belongsTo(Pages::class, 'page_id');
    }
}