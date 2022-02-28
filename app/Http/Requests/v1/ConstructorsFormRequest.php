<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class ConstructorsFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'country' => 'required',
            'founded_in' => 'required',
            'engine' => 'required',
            'color_primary' => 'required',
            'color_secondary' => 'required',
            'url_logo' => 'required',
            'url_icon' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Param <name> is required',
            'country.required' => 'Param <country> is required',
            'founded_in.required' => 'Param <founded_in> is required',
            'engine.required' => 'Param <engine> is required',
            'color_primary.required' => 'Param <color_primary> is required',
            'color_secondary.required' => 'Param <color_secondary> is required',
            'url_logo.required' => 'Param <url_logo> is required',
            'url_icon.required' => 'Param <url_icon> is required'
        ];
    }
}
