<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class, 'chapter_id');
    }

    public function materials()
    {
        return $this->hasMany(Material::class, 'chapter_id');
    }
}
