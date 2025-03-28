<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Exercises extends Model
{
    /** @use HasFactory<\Database\Factories\ExercisesFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'type_of_exercise_id',
        'equipment_id',
        'muscle_group_id',
    ];

    public function type_of_exercise()
    {
        return $this->belongsTo(Type_of_exercise::class, 'type_of_exercise_id');
    }

    public function equipment()
    {
        return $this->belongsToMany(Equipment::class, 'exercise_equipment', 'exercise_id', 'equipment_id');
    }

    public function muscle_group()
    {
        return $this->belongsToMany(Muscle_groups::class, 'exercise_muscle', 'exercise_id', 'muscle_group_id');
    }

    public $timestamps = true;
}
