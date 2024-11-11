<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttemptHistory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function learner()
    {
        return $this->belongsTo(Learner::class);
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'learners_answers', 'attempt_history_id', 'question_id');
    }
}
