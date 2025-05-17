<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

}