<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExercisesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'type_of_exercise_id' => ['required', 'integer', 'exists:type_of_exercises,id'],
            'equipment_id' => ['sometimes', 'array'],
            'equipment_id.*' => ['integer', 'exists:equipment,id'],
            'muscle_group_id' => ['sometimes', 'array'],
            'muscle_group_id.*' => ['integer', 'exists:muscle_groups,id'],
        ];
    }
}
