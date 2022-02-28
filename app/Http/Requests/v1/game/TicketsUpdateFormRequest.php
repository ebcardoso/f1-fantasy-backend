<?php

namespace App\Http\Requests\v1\game;

use Illuminate\Foundation\Http\FormRequest;

class TicketsUpdateFormRequest extends FormRequest
{
    public function rules() {
        return [
            'driver_p1_id' => 'required',
            'driver_p2_id' => 'required',
            'driver_p3_id' => 'required',
            'driver_p4_id' => 'required',
            'driver_p5_id' => 'required',
            'driver_bestlap_id' => 'required',
            'driver_oftheday_id' => 'required',
            'driver_speedtrap_id' => 'required',
            'driver_overtakes_id' => 'required',
            'constructor_bestpit_id' => 'required',
            'num_safetycars' => 'required',
            'win_num_of_pits' => 'required',
            'win_tyre' => 'required',
        ];
    }

    public function messages() {
        return [
            'driver_p1_id.required' => 'Param <driver_p1_id> is required.',
            'driver_p2_id.required' => 'Param <driver_p2_id> is required.',
            'driver_p3_id.required' => 'Param <driver_p3_id> is required.',
            'driver_p4_id.required' => 'Param <driver_p4_id> is required.',
            'driver_p5_id.required' => 'Param <driver_p5_id> is required.',
            'driver_bestlap_id.required' => 'Param <driver_bestlap_id> is required.',
            'driver_oftheday_id.required' => 'Param <driver_oftheday_id> is required.',
            'driver_speedtrap_id.required' => 'Param <driver_speedtrap_id> is required.',
            'driver_overtakes_id.required' => 'Param <driver_overtakes_id> is required.',
            'constructor_bestpit_id.required' => 'Param <constructor_bestpit_id> is required.',
            'num_safetycars.required' => 'Param <num_safetycars> is required.',
            'win_num_of_pits.required' => 'Param <win_num_of_pits> is required.',
            'win_tyre.required' => 'Param <win_tyre> is required.',
        ];
    }
}
