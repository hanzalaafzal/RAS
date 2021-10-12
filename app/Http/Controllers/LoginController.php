<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
use Validator;


class LoginController extends Controller
{

  public function auth(Request $req){

    $req->validate([
      'userid' => 'required|exists:users,userid',
      'password' => 'required'
    ],[
      'userid.required' => 'Please Enter userid',
      'userid.exists' => 'Incorrect User id or Password',
      'password' => 'Please enter password'
    ]);

    $user=User::where('userid',$req->userid)->get()->toArray();
    if(!empty($user)){

      if(Hash::check($req->password,$user[0]['password'])==true){
        session()->put('auth',$user[0]);
        return redirect()->route('admin.dashboard');
      }else{
        return redirect()->back()->withErrors(['userid' => ['Incorrect userid and password']]);
      }
    }else{

    }


  }


}
