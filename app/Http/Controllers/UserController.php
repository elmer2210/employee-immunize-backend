<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function  getAllUser(){
        $users = User::with('profile')->get();
        return response()->json([
            'code'=> '201',
            'msg' => [
                'summary' => "success",
                'details' => $users,
            ]
        ]);
    }

    public function  getUserById($id)
    {
        $user = User::find($id);
        return response()->json([
            'code' => '201',
            'msg' => [
                'summary' => "success",
                'details' => $user,
            ]
        ]);
    }

    public function updateUser(Request $request, $id){
        $fields = $request->validate([
            'identity_card'=>'required|string',
            'names'=>'required|string',
            'surnames'=>'required|string',
            'email'=>'required|string',
        ]);

        $user = User::find($id)->update([
            'identity_card' => $fields['identity_card'],
            'names' => $fields['names'],
            'surnames' => $fields['surnames'],
            'email' => $fields['email'],
            'username' => $fields['email'],
            'password' => bcrypt("user-".$fields['identity_card']),
            'role_id' => 2,]);

        return response()->json([
            'code'=> '201',
            'msg' => [
                'summary' => 'Usuario Creado correctamente',
                'code' => '201 OK',
                'details' => $user,
            ]], 201);
    }

}
