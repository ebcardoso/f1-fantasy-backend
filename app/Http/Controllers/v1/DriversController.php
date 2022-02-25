<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\v1\DriversModel as DriversModel;

class DriversController extends Controller
{
    public function index()
    {
        try {
            $drivers = DriversModel::All();
            return response()->json($drivers, 200);
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
        } catch (Exception $e) {
            return response()->json(['errors' => $e->getMessage()], 500);
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
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $driver = DriversModel::find($id);
        if (is_null($driver)) {
            return response()->json(['errors' => 'Driver Not Found!'], 404);
        }
        
        $validator = Validator::make(
            $request->all(), 
            $this->get_rules(), 
            $this->get_messages());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
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
        } catch (Exception $e) {
            return response()->json(['errors' => "Could not Update",], 500);
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
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'name_abbreviation' => 'required',
            'number' => 'required',
            'country' => 'required',
            'country_abbreviation' => 'required'
        ];
    }

    private function get_messages() {
        return [
            'first_name.required' => 'Param <first_name> is required.',
            'last_name.required' => 'Param <last_name> is required.',
            'birth_date.required' => 'Param <birth_date> is required.',
            'name_abbreviation.required' => 'Param <name_abbreviation> is required.',
            'number.required' => 'Param <number> is required.',
            'country.required' => 'Param <country> is required.',
            'country_abbreviation.required' => 'Param <country_abbreviation> is required.'
        ];
    }
}
