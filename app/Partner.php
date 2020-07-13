<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'title',
        'logo'
   ];

   public function getImage01Attribute($logo)
    {
        return asset($logo);
    }
}
