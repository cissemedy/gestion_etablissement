<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;

        $user->save();

        return back()->with('success', 'Vous etes bien inscrit avec success !');
        
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
       
         $credentials = $request->only('email', 'password');

         if (Auth::attempt($credentials)) {
             
             return redirect('/login')->with('success', 'Les informations d\'identification sont bien correctes.');
         } else {
            
             return redirect()->route('login')->with('error', 'Les informations d\'identification sont incorrectes.');
    }
}

}
