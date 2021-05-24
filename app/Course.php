<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_title','course_subtitle','course_description','course_photo','course_outline','course_requirement'];

}
