<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function learners()
    {
        return $this->belongsToMany(Learner::class, 'enrollments', 'course_id', 'learner_id')
            ->withPivot('status');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'course_id');
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'instructors', 'course_id', 'instructor_id');
    }

    public function course_instructors()
    {
        return $this->hasMany(Course_Instructor::class, 'course_id');
    }
}
