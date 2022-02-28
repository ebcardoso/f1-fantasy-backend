<?php

namespace App\Http\Requests\v1\game;

use Illuminate\Foundation\Http\FormRequest;

class FantasyStoreFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'seasons_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Param <name> is required.',
            'seasons_id.required' => 'Param <seasons_id> is required.',
            'seasons_id.numeric' => 'Param <seasons_id> must be <numeric>.'
        ];
    }
}
