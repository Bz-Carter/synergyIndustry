<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transition extends Model
{
    public function slides()
    {
        return $this->hasMany('App\Slide');
    }
}
