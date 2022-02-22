<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\v1\ConstructorsModel as ConstructorsModel;

class ConstructorsController extends Controller
{
    public function index()
    {
        try {
            $constructors = ConstructorsModel::All();
            return response()->json($constructors, 200);
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->get_rules(), $this->get_messages());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

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
        } catch (Exception $e) {
            return response()->json(['errors' => $e->getMessage()], 500);
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
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $constructor = ConstructorsModel::find($id);
        if (is_null($constructor)) {
            return response()->json(['errors' => 'Constructor Not Found!'], 404);
        }
        
        $validator = Validator::make($request->all(), $this->get_rules(), $this->get_messages());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
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
        } catch (Exception $e) {
            return response()->json(['errors' => "Erro ao Editar",], 500);
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
                } catch (Exception $e) {
                    return response()->json(['errors' => "Erro ao Deletar",], 500);
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => "Erro ao Deletar",], 500);
        }
    }

    private function get_rules() {
        return [
            'name' => 'required',
            'country' => 'required',
            'founded_in' => 'required',
            'engine' => 'required',
            'color_primary' => 'required',
            'color_secondary' => 'required',
            'url_logo' => 'required',
            'url_icon' => 'required'
        ];
    }

    private function get_messages() {
        return [
            'name.required' => 'Param <name> is required',
            'country.required' => 'Param <country> is required',
            'founded_in.required' => 'Param <founded_in> is required',
            'engine.required' => 'Param <engine> is required',
            'color_primary.required' => 'Param <color_primary> is required',
            'color_secondary.required' => 'Param <color_secondary> is required',
            'url_logo.required' => 'Param <url_logo> is required',
            'url_icon.required' => 'Param <url_icon> is required'
        ];
    }
}
