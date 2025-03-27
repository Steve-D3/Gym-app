<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Muscle_groups extends Model
{
    protected $fillable = [
        'name',
    ];

    public function exercises()
    {
        return $this->belongsToMany(Exercises::class, 'exercise_muscle');
    }
}
