<?php

namespace App\Http\Requests\v1\game;

use Illuminate\Foundation\Http\FormRequest;

class HomeFantasyModeFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'races_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'races_id.required' => 'Param <races_id> is required.',
            'races_id.numeric' => 'Param <races_id> must be <numeric>.',
        ];
    }
}
