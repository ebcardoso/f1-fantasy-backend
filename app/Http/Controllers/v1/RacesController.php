<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\v1\RacesModel as RacesModel;

class RacesController extends Controller
{
    public function index()
    {
        try {
            $races = RacesModel::All();
            return response()->json($races, 200);
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
        } catch (Exception $e) {
            return response()->json(['errors' => $e->getMessage()], 500);
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
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $race = RacesModel::find($id);
        if (is_null($race)) {
            return response()->json(['errors' => 'Race Not Found!'], 404);
        }
        
        $validator = Validator::make(
            $request->all(), 
            $this->get_rules(), 
            $this->get_messages());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

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
            $races->save();
            return response()->json($races, 200);
        } catch (Exception $e) {
            return response()->json(['errors' => "Could not Update",], 500);
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
            'seasons_id' => 'required',
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

    private function get_messages() {
        return [
            'seasons_id.required' => 'Param <seasons_id> is required.',
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
