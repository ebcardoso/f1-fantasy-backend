<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\v1\ConstructorsModel as ConstructorsModel;
use App\Http\Requests\v1\ConstructorsFormRequest as ConstructorsFormRequest;

class ConstructorsController extends Controller
{
    public function index()
    {
        try {
            $constructors = ConstructorsModel::All();
            return response()->json($constructors, 200);
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function store(ConstructorsFormRequest $request)
    {
        $constructor = new ConstructorsModel;
        $constructor->name = $request->name;
        $constructor->country = $request->country;
        $constructor->founded_in = $request->founded_in;
        $constructor->engine = $request->engine;
        $constructor->color_primary = $request->color_primary;
        $constructor->color_secondary = $request->color_secondary;
        $constructor->url_logo = $request->url_logo;
        $constructor->url_icon = $request->url_icon;

        try {
            $constructor->save();
            return response()->json($constructor, 201);
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function show($id)
    {
        try {
            $constructor = ConstructorsModel::find($id);
            if (is_null($constructor)) {
                return response()->json(['message' => 'Constructor Not Found'], 404);
            } else {
                return response()->json($constructor, 200);
            }
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function update(ConstructorsFormRequest $request, $id)
    {
        $constructor = ConstructorsModel::find($id);
        if (is_null($constructor)) {
            return response()->json(['errors' => 'Constructor Not Found!'], 404);
        }
        
        $constructor->name = $request->name;
        $constructor->country = $request->country;
        $constructor->founded_in = $request->founded_in;
        $constructor->engine = $request->engine;
        $constructor->color_primary = $request->color_primary;
        $constructor->color_secondary = $request->color_secondary;
        $constructor->url_logo = $request->url_logo;
        $constructor->url_icon = $request->url_icon;
        
        try {
            $constructor->save();
            return response()->json($constructor, 200);
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function destroy($id)
    {
        try {
            $constructor = ConstructorsModel::find($id);
            if (is_null($constructor)) {
                return response()->json(['message' => 'Construtor não encontrado'], 404);
            } else {   
                try {
                    $delete = $constructor->delete();
                    return response()->json($constructor, 200);
                } catch (QueryException $ex) {
                    return response()->json($ex, 500);
                }
            }
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }
}
