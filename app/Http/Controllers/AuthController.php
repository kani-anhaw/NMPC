<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login(){
        return view("login");
    }
    public function loginUser(Request $request){

        $request->validate([
            'username'=>'required|username',
            'password'=>'required'
        ]);

        $user = User::where('email', '=', $request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('home');
            }else{
                return back()-> with ('failed', 'Incorrect password.');
            }

         }else{
            return back()-> with ('failed', 'Username does not exist.');
         }
    }




}

