<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{


    protected $fillable = [
        'name', 'namefr', 'slug', 'extrait', 'extraitfr', 'content', 'contentfr', 'featured'
    ];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }


    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
