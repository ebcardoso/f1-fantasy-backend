<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\v1\ParticipationsModel as ParticipationsModel;

class ParticipationsController extends Controller
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

        $participations = new ParticipationsModel;
        $participations->drivers_id = $request->drivers_id;
        $participations->constructors_id = $request->constructors_id;
        $participations->races_id = $request->races_id;

        try {
            $participations->save();
            return response()->json($participations, 201);
        } catch (Exception $e) {
            return response()->json(['errors' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $participations = ParticipationsModel::find($id);
            if (is_null($participations)) {
                return response()->json(['message' => 'Driver-Participation not found'], 404);
            } else {   
                try {
                    $delete = $participations->delete();
                    return response()->json($participations, 200);
                } catch (Exception $e) {
                    return response()->json(['errors' => "Could not delete",], 500);
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => "Could not delete",], 500);
        }
    }

    private function get_rules() {
        return [
            'drivers_id' => 'required',
            'constructors_id' => 'required',
            'races_id' => 'required',
        ];
    }

    private function get_messages() {
        return [
            'drivers_id.required' => 'Param <drivers_id> is required.',
            'constructors_id.required' => 'Param <constructors_id> is required.',
            'races_id.required' => 'Param <races_id> is required.',
        ];
    }
}
