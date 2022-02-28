<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class RacesStoreFormRequest extends FormRequest
{
    public function rules() {
        return [
            'seasons_id' => 'required|numeric',
            'name' => 'required',
            'circuit_name' => 'required',
            'country' => 'required',
            'url_country_flag' => 'required',
            'city' => 'required',
            'date' => 'required',
            'status' => 'required',
            'order_of_realization' => 'required'
        ];
    }

    public function messages() {
        return [
            'seasons_id.required' => 'Param <seasons_id> is required.',
            'seasons_id.numeric' => 'Param <seasons_id> must be <numeric>.',
            'name.required' => 'Param <name> is required.',
            'circuit_name.required' => 'Param <circuit_name> is required.',
            'country.required' => 'Param <country> is required.',
            'url_country_flag.required' => 'Param <url_country_flag> is required.',
            'city.required' => 'Param <city> is required.',
            'date.required' => 'Param <date> is required.',
            'status.required' => 'Param <status> is required.',
            'order_of_realization.required' => 'Param <order_of_realization> is required.'
        ];
    }
}
