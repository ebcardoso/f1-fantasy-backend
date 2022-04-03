<?php

namespace App\Http\Controllers\v1\game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\v1\TicketsModel as TicketsModel;
use App\Http\Requests\v1\game\HomeFantasyModeFormRequest as HomeFantasyModeFormRequest;

class HomeController extends Controller
{
    public function display_mode_ticket(HomeFantasyModeFormRequest $request) {
        try {
            $ticket = TicketsModel::select('*')
                                   ->where('races_id', $request->races_id)
                                   ->where('user_id', auth()->user()->id)
                                   ->get();
            if (count($ticket) == 0) {
                $response = [
                    'mode_code' => 1,
                    'mode_type' => 'creation_mode'
                ];
                return response()->json($response, 200);
            } else {
                $response = [
                    'mode_code' => 2,
                    'mode_type' => 'update_mode',
                    'ticket' => $ticket[0]
                ];
                return response()->json($response, 200);
            }
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }
}
