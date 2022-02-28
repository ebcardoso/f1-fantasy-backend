<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\v1\SeasonsModel as SeasonsModel;
use App\Http\Requests\v1\SeasonsFormRequest as SeasonsFormRequest;

class SeasonsController extends Controller
{
    public function index()
    {
        try {
            $seasons = SeasonsModel::All();
            return response()->json($seasons, 200);
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function store(SeasonsFormRequest $request)
    {
        $season = new SeasonsModel;
        $season->name = $request->name;
        $season->status = $request->status;

        try {
            $season->save();
            return response()->json($season, 201);
        } catch (QueryException $e) {
            return response()->json($e, 500);
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
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function update(SeasonsFormRequest $request, $id)
    {
        $season = SeasonsModel::find($id);
        if (is_null($season)) {
            return response()->json(['errors' => 'Season Not Found!'], 404);
        }

        $season->name = $request->name;
        $season->status = $request->status;
        
        try {
            $season->save();
            return response()->json($season, 200);
        } catch (QueryException $e) {
            return response()->json($e, 500);
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
                } catch (QueryException $e) {
                    return response()->json($e, 500);
                }
            }
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function get_races($id)
    {
        try {
            $season = SeasonsModel::find($id);
            if (is_null($season)) {
                return response()->json(['message' => 'Season Not Found'], 404);
            } else {
                return response()->json($season->races, 200);
            }
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }
}
