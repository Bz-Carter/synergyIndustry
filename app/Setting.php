<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['site_name', 'address', 'contact_number_1', 'contact_number_2', 'contact_email', 'linked_in', 'facebook', 'twitter', 'googlePlus'];
}
