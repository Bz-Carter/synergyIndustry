<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
         'title',
         'slug',
         'client',
         'description',
         'descriptionfr',
         'about',
         'aboutfr',
         'image_01', 'image_02', 'image_03',
         'service_id',
         'dateproject'

    ];

    public function getImage01Attribute($image_01)
    {
        return asset($image_01);
    }

    public function getImage02Attribute($image_02)
    {
        return asset($image_02);
    }

    public function getImage03Attribute($image_03)
    {
        return asset($image_03);
    }
    

    protected $date = ['deleted_at'];


    public function service()
    {
        return $this->belongsTo('App\Service');

    }
}
