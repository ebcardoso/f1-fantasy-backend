<?php

namespace App\Http\Controllers\v1\game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\v1\TicketsModel as TicketsModel;
use App\Http\Requests\v1\game\TicketsStoreFormRequest as TicketsStoreFormRequest;
use App\Http\Requests\v1\game\TicketsUpdateFormRequest as TicketsUpdateFormRequest;

class TicketsController extends Controller
{
    public function store(TicketsStoreFormRequest $request)
    {
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

    public function update(TicketsUpdateFormRequest $request, $id)
    {
        $ticket = TicketsModel::find($id);
        if (is_null($ticket)) {
            return response()->json(['errors' => 'Ticket Not Found!'], 404);
        }
        
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

    
}