<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class AuthController extends Controller
{
    //
    public function register(Request $request){
        $fields = $request->validate([
            'identity_card'=>'required|string|unique:users,identity_card',
            'names'=>'required|string',
            'surnames'=>'required|string',
            'email'=>'required|string|unique:users,email',
        ]);

        $user = User::create([
            'identity_card' => $fields['identity_card'],
            'names' => $fields['names'],
            'surnames' => $fields['surnames'],
            'email' => $fields['email'],
            'username' => $fields['email'],
            'password' => bcrypt("user-".$fields['identity_card']),
            'role_id' => 2,
        ]);
        $token = $user->createToken('myapptoken')->plainTextToken;

        return response()->json([
            'token' => $token,
            'msg' => [
                'summary' => 'Usuario Creado correctamente',
                'code' => '201 OK',
                'details' => $user,
            ]], 201);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'username'=>'required|string',
            'password'=>'required|string',
        ]);

        //Check Email
        $user = User::with('role')->where('username', $fields['username'])->first();

        //Check Password
        if(!$user || !Hash::check($fields['password'], $user->password)){
            return response()->json([
                'token' => 'Babad credentials',
                'msg' => [
                    'summary' => 'Credenciales Incorrectas o np existe',
                    'code' => '401',
                    'details' => $user,
                ]
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        return response()->json([
            'token' => $token,
            'msg' => [
                'summary' => 'OK',
                'code' => '201',
                'details' => $user,
            ]], 201);
    }

    public function logaut(Request $request){
        auth()->user()->tokens()->delete();

        return response()->json([
            'msg'=> 'Logged Out!!',
            'summary'=>'Success',
            'code'=>'201 OK'
        ], 201);
    }
}
