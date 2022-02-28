<?php

namespace App\Http\Controllers\v1\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request, User $user) 
    {
        $validator = Validator::make(
            $request->all(), 
            $this->get_rules(), 
            $this->get_messages());
        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $userData = $request->only('name', 'email', 'password');
        $userData["password"] = bcrypt($userData["password"]);
        $userData["type"] = 2; //Game User
        $userData["status"] = 1; //Activated

        try
        {
            $user = $user->create($userData);
            return response()->json(['user' => $user], 200);
        }
        catch(QueryException $exception)
        {
            return response()->json($exception, 500);
        } 

    }

    private function get_rules() {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
    }

    private function get_messages() {
        return [
            'name.required' => 'Param <name> is required',
            'email.required' => 'Param <email> is required',
            'password.required' => 'Param <password> is required'
        ];
    }
}
