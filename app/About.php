<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['title','content','photo','google_url','facebook_url','mission','vision','passing'];

}
