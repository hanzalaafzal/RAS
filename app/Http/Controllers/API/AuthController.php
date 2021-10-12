<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
use Validator;

class AuthController extends Controller
{
  public function Auths(Request $req){
    $validation = Validator::make($req->all(),[
      'email' => 'required|email|exists:users,email',
      'password' => 'required|string',

    ]);
    if($validation->fails()){
      return response(json_encode(['message' => $validation->errors()] )
        ,500
      );
    }

    $credentials = [
      'email' => $req->email,
      'password' => $req->password,
    ];

    if(Auth::attempt($credentials)){
      $user=Auth::user();
      $token=$user->createToken('abc')->accessToken;
      return response(json_encode(
        [
          'message' => 'ok',
          'token' => $token,
        ],
      ),200);
    }
    else{
      return response(json_encode([
        'message' => 'incorrect credentials'
      ]),401);
    }


  }

  public function Register(Request $req){
    $validation = Validator::make($req->all(),[
      'name' => 'required|min:3',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|min:4',
      'c_password' => 'required|same:password',
      'userid' => 'required|unique:users,userid'
    ]);

    if($validation->fails()){
      return response(json_encode(
        ['message' => $validation->errors() ,
      'status' => 'error',
    ]
      ),500);
    }

    User::create([
      'name' => $req->name,
      'email' => $req->email,
      'password' => Hash::make($req->password),

    ]);

    return response(json_encode(
      [
        'message' => 'saved',
        'status' => 'ok',
      ],
    ),200);

  }
}
