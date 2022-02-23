<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\v1\SeasonsModel as SeasonsModel;

class SeasonsController extends Controller
{
    public function index()
    {
        try {
            $seasons = SeasonsModel::All();
            return response()->json($seasons, 200);
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(), 
            $this->get_rules(), 
            $this->get_messages());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $season = new SeasonsModel;
        $season->name = $request->name;
        $season->status = $request->status;

        try {
            $season->save();
            return response()->json($season, 201);
        } catch (Exception $e) {
            return response()->json(['errors' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $season = SeasonsModel::find($id);
            if (is_null($season)) {
                return response()->json(['message' => 'Season Not Found'], 404);
            } else {
                return response()->json($season, 200);
            }
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $season = SeasonsModel::find($id);
        if (is_null($season)) {
            return response()->json(['errors' => 'Season Not Found!'], 404);
        }
        
        $validator = Validator::make(
            $request->all(), 
            $this->get_rules(), 
            $this->get_messages());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $season->name = $request->name;
        $season->status = $request->status;
        
        try {
            $season->save();
            return response()->json($season, 200);
        } catch (Exception $e) {
            return response()->json(['errors' => "Could not Update",], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $season = SeasonsModel::find($id);
            if (is_null($season)) {
                return response()->json(['message' => 'Season Not Found!'], 404);
            } else {   
                try {
                    $delete = $season->delete();
                    return response()->json($season, 200);
                } catch (Exception $e) {
                    return response()->json(['errors' => "Could not delete!",], 500);
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => "Could not delete!",], 500);
        }
    }

    private function get_rules() {
        return [
            'name' => 'required',
            'status' => 'required'
        ];
    }

    private function get_messages() {
        return [
            'name.required' => 'Param <name> is required.',
            'status.required' => 'Param <status> is required.'
        ];
    }
}
