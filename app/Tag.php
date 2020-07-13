<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = ['tag', 'tagfr'];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
