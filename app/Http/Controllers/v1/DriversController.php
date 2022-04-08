<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\v1\DriversModel as DriversModel;
use App\Http\Requests\v1\DriversFormRequest as DriversFormRequest;

class DriversController extends Controller
{
    public function index()
    {
        try {
            $drivers = DriversModel::All();
            return response()->json($drivers, 200);
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function store(DriversFormRequest $request)
    {
        $driver = new DriversModel;
        $driver->first_name = $request->first_name;
        $driver->last_name = $request->last_name;
        $driver->birth_date = $request->birth_date;
        $driver->name_abbreviation = $request->name_abbreviation;
        $driver->number = $request->number;
        $driver->country = $request->country;
        $driver->country_abbreviation = $request->country_abbreviation;
        $driver->url_country_flag = $request->url_country_flag;
        $driver->url_photo = $request->url_photo;

        try {
            $driver->save();
            return response()->json($driver, 201);
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function show($id)
    {
        try {
            $driver = DriversModel::find($id);
            if (is_null($driver)) {
                return response()->json(['message' => 'Driver Not Found'], 404);
            } else {
                return response()->json($driver, 200);
            }
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function update(DriversFormRequest $request, $id)
    {
        $driver = DriversModel::find($id);
        if (is_null($driver)) {
            return response()->json(['errors' => 'Driver Not Found!'], 404);
        }

        $driver->first_name = $request->first_name;
        $driver->last_name = $request->last_name;
        $driver->birth_date = $request->birth_date;
        $driver->name_abbreviation = $request->name_abbreviation;
        $driver->number = $request->number;
        $driver->country = $request->country;
        $driver->country_abbreviation = $request->country_abbreviation;
        $driver->url_country_flag = $request->url_country_flag;
        $driver->url_photo = $request->url_photo;
        
        try {
            $driver->save();
            return response()->json($driver, 200);
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function destroy($id)
    {
        try {
            $driver = DriversModel::find($id);
            if (is_null($driver)) {
                return response()->json(['message' => 'Driver not found'], 404);
            } else {   
                try {
                    $delete = $driver->delete();
                    return response()->json($driver, 200);
                } catch (QueryException $e) {
                    return response()->json(['errors' => "Could not delete",], 500);
                }
            }
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }

    public function get_active_drivers()
    {
        try {
            $drivers = DriversModel::select('*')
                                     ->where('status', 1)
                                     ->orderBy('last_name')
                                     ->get();
            return response()->json($drivers, 200);
        } catch (QueryException $e) {
            return response()->json($e, 500);
        }
    }
}
