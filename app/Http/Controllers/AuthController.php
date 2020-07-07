<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $request->merge([
                "password" => app('hash')->make($request->password),
            ]);

            $user = User::create($request->all());

            DB::commit();

            return response()->json([
                "status" => 201,
                "message" => "Created",
                "data" => $user
            ]);
        } catch (\Exception $e) {
            DB::roolback();
            return response()->json([
                "status" => 409,
                "message" => "User Registration Failed!",
                "data" => []
            ], 409);
        }
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!$token = Auth::attempt($request->only(["email", "password"]))) {
            return response()->json([
                "status" => 401,
                "message" => "Unauthorized",
                "data" => []
            ], 401);
        }

        return response()->json([
            "status" => 200,
            "message" => "OK",
            "data" => [
                "name"       => Auth::user()->name,
                "token"      => $token,
                "token_type" => "Bearer"
            ]
        ], 200);
    }

    public function me(Request $request)
    {
        return response()->json([
            "status" => 200,
            "message" => "OK",
            "data" => [
                "id" => Auth::user()->id,
                "name" => Auth::user()->name,
                "token" => $request->bearerToken()
            ]
        ]);
    }
}
