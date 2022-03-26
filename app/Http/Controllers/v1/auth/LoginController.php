<?php

namespace App\Http\Controllers\v1\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request) 
    {
        $credentials = $request->only('email', 'password');
     
        $validator = Validator::make(
            $request->all(), 
            $this->get_rules(), 
            $this->get_messages());
        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        if (!auth()->attempt($credentials)) 
        {
            return response()->json(['error' => "Invalid Credentials",], 401);
        } 

        $token = auth()->user()->createToken('auth_token');

        $response = array(
            'access_token' => $token->plainTextToken,
            'user' => array(
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'type' => auth()->user()->type,
                'status' => auth()->user()->status
            )
        );
        return response()->json($response, 200);
    }

    public function logout()
    {
        try 
        {
            auth()->user()->currentAccessToken()->delete();
            return response()->json([], 200);
        } 
        catch (Exception $e)
        {
            return response()->json([
                'error' => "Cannot logout",
                'message' => $e
            ], 500);
        }
    }

    public function get_user() 
    {
        return auth()->user();//response()->json(auth()->user(), 200);
    }

    private function get_rules() {
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }

    private function get_messages() {
        return [
            'email.required' => 'Param <email> is required',
            'password.required' => 'Param <password> is required'
        ];
    }
}
