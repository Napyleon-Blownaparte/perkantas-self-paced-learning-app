<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleChoiceOption extends Model
{
    use HasFactory;

    public function multiple_choice_question()
    {
        return $this->belongsTo(MultipleChoiceQuestion::class);
    }
}
