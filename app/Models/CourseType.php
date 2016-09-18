<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    protected $table = 'course_types';

    public $timestamps = false;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
