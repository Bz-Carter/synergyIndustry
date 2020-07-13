<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'titlefr', 'info', 'infofr', 'slug', 'delay', 'transition_id', 'slideinfo_id', 'slidetitle_id', 'photo'];

   public function getPhotoAttribute($photo)
    {
        return asset($photo);
    }

    protected $date = ['deleted_at'];

    public function transition()
    {
        return $this->belongsTo('App\Transition');

    }

    public function slideinfo()
    {
        return $this->belongsTo('App\Slideinfo');

    }

    public function slidetitle()
    {
        return $this->belongsTo('App\Slidetitle');

    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
