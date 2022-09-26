<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(UserRequest $r){
        $r['password'] = Hash::make($r->password);
        $user = User::create($r->all());
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'user'=>$user,
            'token' => $token
        ];
        return response()->json($response);
    };
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'bad credits'
            ]);
        }
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response()->json($response);
    };
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message'=>'Logged out']);
    };
}