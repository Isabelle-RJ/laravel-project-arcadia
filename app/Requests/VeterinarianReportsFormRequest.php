<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeterinarianReportsFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'animal_id' => 'required|integer',
            'animal_state' => 'required|string',
            'food_consum_id' => 'required|integer',
            'content' => 'required|string',
        ];
    }
}
