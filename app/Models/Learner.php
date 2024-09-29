<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    use HasFactory;

    protected $guarded  = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'enrollments', 'learner_id', 'course_id')
            ->withPivot('status');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'learner_id');
    }

    public function attempt_histories()
    {
        return $this->hasMany(AttemptHistory::class, 'learner_id');
    }
}
