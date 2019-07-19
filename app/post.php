<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    protected $fillable = ['title', 'body'];

    public function comment()
    {
        return $this->hasMany(\App\Comment::class);
    }
   
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }


}
