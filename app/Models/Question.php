<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function questionable()
    {
        return $this->morphTo();
    }

    public function attempt_histories()
    {
        return $this->belongsToMany(AttemptHistory::class, 'learners_answers', 'question_id', 'attempt_history_id');
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

}
