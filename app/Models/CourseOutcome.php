<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseOutcome extends Model
{
    use HasFactory;

    public function course()
    {
        $this->belongsTo(Course::class);
    }
}
