<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\v1\RacesModel as RacesModel;
use App\Http\Requests\v1\RacesStoreFormRequest as RacesStoreFormRequest;
use App\Http\Requests\v1\RacesUpdateFormRequest as RacesUpdateFormRequest;

class RacesController extends Controller
{
    public function index()
    {
        try {
            $races = RacesModel::All();
            return response()->json($races, 200);
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function store(RacesStoreFormRequest $request)
    {
        $race = new RacesModel;
        $race->seasons_id = $request->seasons_id;
        $race->name = $request->name;
        $race->circuit_name = $request->circuit_name;
        $race->country = $request->country;
        $race->url_country_flag = $request->url_country_flag;
        $race->city = $request->city;
        $race->date = $request->date;
        $race->status = $request->status;
        $race->order_of_realization = $request->order_of_realization;

        try {
            $race->save();
            return response()->json($race, 201);
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function show($id)
    {
        try {
            $race = RacesModel::find($id);
            if (is_null($race)) {
                return response()->json(['message' => 'Race Not Found'], 404);
            } else {
                return response()->json($race, 200);
            }
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function update(RacesUpdateFormRequest $request, $id)
    {
        $race = RacesModel::find($id);
        if (is_null($race)) {
            return response()->json($e, 404);
        }

        $race->name = $request->name;
        $race->circuit_name = $request->circuit_name;
        $race->country = $request->country;
        $race->url_country_flag = $request->url_country_flag;
        $race->city = $request->city;
        $race->date = $request->date;
        $race->status = $request->status;
        $race->order_of_realization = $request->order_of_realization;
        
        try {
            $race->save();
            return response()->json($race, 200);
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function destroy($id)
    {
        try {
            $race = RacesModel::find($id);
            if (is_null($race)) {
                return response()->json(['message' => 'Race Not Found!'], 404);
            } else {   
                try {
                    $delete = $race->delete();
                    return response()->json($race, 200);
                } catch (QueryException $e) {
                    return response()->json($e, 500);
                }
            }
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function get_grid($id) {
        try {
            $race = RacesModel::find($id);
            if (is_null($race)) {
                return response()->json(['message' => 'Race Not Found'], 404);
            } else {
                $drivers = RacesModel::select(
                            'drivers.id as drivers_id',
                            'drivers.first_name as first_name',
                            'drivers.last_name as last_name',
                            'drivers.name_abbreviation',
                            'constructors.name as constructor',
                            'drivers.number as number',
                            'drivers.url_photo as url_photo',
                           )
                           ->join('participations', 'participations.races_id', '=', 'races.id')
                           ->join('drivers', 'drivers.id', '=', 'participations.drivers_id')
                           ->join('constructors', 'constructors.id', '=', 'participations.constructors_id')
                           ->where('races.id', $id)
                           ->orderBy('drivers.last_name')
                           ->get();
                return response()->json($drivers, 200);
            }
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }
}
