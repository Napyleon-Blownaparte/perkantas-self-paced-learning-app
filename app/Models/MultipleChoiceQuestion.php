<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleChoiceQuestion extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->morphOne(Question::class, 'questionable');
    }

    public function multiple_choice_options()
    {
        return $this->hasMany(MultipleChoiceOption::class, 'multiple_choice_question_id');
    }
}
