<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class SeasonsFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'status' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Param <name> is required.',
            'status.required' => 'Param <status> is required.'
        ];
    }
}
