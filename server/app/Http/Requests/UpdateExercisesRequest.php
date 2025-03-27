<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExercisesRequest extends FormRequest
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
            'name' => ['sometimes', 'string', 'max:255'],
            'description' => ['sometimes', 'string'],
            'type_of_exercise_id' => ['sometimes', 'integer'],
            'equipment_id' => ['sometimes', 'array', 'min:1'],
            'equipment_id.*' => ['sometimes', 'integer'],
            'muscle_group_id' => ['sometimes', 'array', 'min:1'],
            'muscle_group_id.*' => ['sometimes', 'integer'],
        ];
    }
}
