<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideinfo extends Model
{
    public function slides()
    {
        return $this->hasMany('App\Slide');
    }
}
