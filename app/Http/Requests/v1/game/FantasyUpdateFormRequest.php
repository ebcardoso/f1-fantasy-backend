<?php

namespace App\Http\Requests\v1\game;

use Illuminate\Foundation\Http\FormRequest;

class FantasyUpdateFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Param <name> is required.',
        ];
    }
}
