<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class DriversFormRequest extends FormRequest
{
    public function rules() {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'name_abbreviation' => 'required',
            'number' => 'required|numeric',
            'country' => 'required',
            'country_abbreviation' => 'required'
        ];
    }

    public function messages() {
        return [
            'first_name.required' => 'Param <first_name> is required.',
            'last_name.required' => 'Param <last_name> is required.',
            'birth_date.required' => 'Param <birth_date> is required.',
            'name_abbreviation.required' => 'Param <name_abbreviation> is required.',
            'number.required' => 'Param <number> is required.',
            'number.numeric' => 'Param <number> must be <numeric>.',
            'country.required' => 'Param <country> is required.',
            'country_abbreviation.required' => 'Param <country_abbreviation> is required.'
        ];
    }
}
