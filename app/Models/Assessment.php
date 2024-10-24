<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function attempt_histories()
    {
        return $this->hasMany(AttemptHistory::class, 'assessment_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'assessment_id');
    }
}
