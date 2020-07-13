<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activityzone extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'logo'

   ];

   public function getImage01Attribute($logo)
    {
        return asset($logo);
    }

}
