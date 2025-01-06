<?php

namespace App\Models;

use App\Events\EnrollmentCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function learner()
    {
        return $this->belongsTo(Learner::class);
    }

}
