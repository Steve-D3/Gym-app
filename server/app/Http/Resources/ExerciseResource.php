<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'type_of_exercise' => [
                'id' => $this->type_of_exercise->id,
                'name' => $this->type_of_exercise->name,
            ],
            'equipment' => $this->equipment->map(function ($equipment) {
                return [
                    'id' => $equipment->id,
                    'name' => $equipment->name,
                ];
            }),
            'muscle_groups' => $this->muscle_group->map(function ($muscleGroup) {
                return [
                    'id' => $muscleGroup->id,
                    'name' => $muscleGroup->name,
                ];
            }),
        ];
    }
}
