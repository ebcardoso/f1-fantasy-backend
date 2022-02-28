<?php

namespace App\Http\Controllers\v1\game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use App\Models\v1\TicketsModel as TicketsModel;

class TicketsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(), 
            $this->get_rules(), 
            $this->get_messages());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $ticket = new TicketsModel;
        $ticket->user_id = auth()->user()->id;
        $ticket->races_id = $request->races_id;
        $ticket->driver_p1_id = $request->driver_p1_id;
        $ticket->driver_p2_id = $request->driver_p2_id;
        $ticket->driver_p3_id = $request->driver_p3_id;
        $ticket->driver_p4_id = $request->driver_p4_id;
        $ticket->driver_p5_id = $request->driver_p5_id;
        $ticket->driver_bestlap_id = $request->driver_bestlap_id;
        $ticket->driver_oftheday_id = $request->driver_oftheday_id;
        $ticket->driver_speedtrap_id = $request->driver_speedtrap_id;
        $ticket->driver_overtakes_id = $request->driver_overtakes_id;
        $ticket->constructor_bestpit_id = $request->constructor_bestpit_id;
        $ticket->num_safetycars = $request->num_safetycars;
        $ticket->win_num_of_pits = $request->win_num_of_pits;
        $ticket->win_tyre = $request->win_tyre;

        try {
            $ticket->save();
            return response()->json($ticket, 201);
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function show($id)
    {
        try {
            $ticket = TicketsModel::find($id);
            if (is_null($ticket)) {
                return response()->json(['message' => 'Ticket Not Found'], 404);
            } else {
                return response()->json($ticket, 200);
            }
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function update(Request $request, $id)
    {
        $ticket = TicketsModel::find($id);
        if (is_null($ticket)) {
            return response()->json(['errors' => 'Ticket Not Found!'], 404);
        }
        
        $validator = Validator::make(
            $request->all(), 
            $this->get_rules(), 
            $this->get_messages());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $ticket->races_id = $request->races_id;
        $ticket->driver_p1_id = $request->driver_p1_id;
        $ticket->driver_p2_id = $request->driver_p2_id;
        $ticket->driver_p3_id = $request->driver_p3_id;
        $ticket->driver_p4_id = $request->driver_p4_id;
        $ticket->driver_p5_id = $request->driver_p5_id;
        $ticket->driver_bestlap_id = $request->driver_bestlap_id;
        $ticket->driver_oftheday_id = $request->driver_oftheday_id;
        $ticket->driver_speedtrap_id = $request->driver_speedtrap_id;
        $ticket->driver_overtakes_id = $request->driver_overtakes_id;
        $ticket->constructor_bestpit_id = $request->constructor_bestpit_id;
        $ticket->num_safetycars = $request->num_safetycars;
        $ticket->win_num_of_pits = $request->win_num_of_pits;
        $ticket->win_tyre = $request->win_tyre;
        
        try {
            $ticket->save();
            return response()->json($ticket, 200);
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function destroy($id)
    {
        try {
            $ticket = TicketsModel::find($id);
            if (is_null($ticket)) {
                return response()->json(['message' => 'Ticket not found'], 404);
            } else {   
                try {
                    $delete = $ticket->delete();
                    return response()->json($ticket, 200);
                } catch (QueryException $ex) {
                    return response()->json($ex, 500);
                }
            }
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    private function get_rules() {
        return [
            'races_id' => 'required',
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

    private function get_messages() {
        return [
            'races_id.required' => 'Param <races_id> is required.',
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
