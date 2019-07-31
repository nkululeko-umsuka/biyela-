<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable=['name','comment'];
    public function post()
    {
        return $this->belongsTo(\App\Post::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
