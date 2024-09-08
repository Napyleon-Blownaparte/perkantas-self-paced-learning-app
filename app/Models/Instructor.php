<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course__instructors', 'instructor_id', 'course_id');
    }

    public function course_instructors()
    {
        return $this->hasMany(Course_Instructor::class, 'instructor_id');
    }
}
