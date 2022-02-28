<?php

namespace App\Http\Controllers\v1\game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Models\v1\FantasyModel as FantasyModel;
use App\Models\v1\FantasyMemberModel as FantasyMemberModel;
use App\Http\Requests\v1\game\FantasyStoreFormRequest as FantasyStoreFormRequest;
use App\Http\Requests\v1\game\FantasyUpdateFormRequest as FantasyUpdateFormRequest;

class FantasyController extends Controller
{
    public function store(FantasyStoreFormRequest $request)
    {
        DB::beginTransaction();
        try {
            $fantasy = new FantasyModel;
            $fantasy->name = $request->name;
            $fantasy->seasons_id = $request->seasons_id;
            $fantasy->save();

            $fantasy_member = new FantasyMemberModel;
            $fantasy_member->fantasy_league_id = $fantasy->id;
            $fantasy_member->user_id = auth()->user()->id;
            $fantasy_member->save();

            DB::commit();
            return response()->json($fantasy, 201);
        } catch (QueryException $ex) {
            DB::rollback();
            return response()->json($ex, 500);
        }
    }

    public function show($id)
    {
        try {
            $fantasy = FantasyModel::find($id);
            if (is_null($fantasy)) {
                return response()->json(['message' => 'Fantasy League Not Found'], 404);
            } else {
                return response()->json($fantasy, 200);
            }
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function update(FantasyUpdateFormRequest $request, $id)
    {
        $fantasy = FantasyModel::find($id);
        if (is_null($fantasy)) {
            return response()->json(['errors' => 'Fantasy League Not Found!'], 404);
        }

        $fantasy->name = $request->name;

        try {
            $fantasy->save();
            return response()->json($fantasy, 200);
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }

    public function destroy($id)
    {
        try {
            $fantasy = FantasyModel::find($id);
            if (is_null($fantasy)) {
                return response()->json(['message' => 'Fantasy League not found'], 404);
            } else {   
                try {
                    $delete = $fantasy->delete();
                    return response()->json($fantasy, 200);
                } catch (QueryException $ex) {
                    return response()->json($ex, 500);
                }
            }
        } catch (QueryException $ex) {
            return response()->json($ex, 500);
        }
    }
}
