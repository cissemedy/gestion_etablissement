<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();

        $user->email = Hash::make($request->email);
        $user->password = Hash::make($request->password);
        $user->name = $request->name;

        $user->save();

        return back()->with('success', 'L\informations ont été bien enregistrés');
    }

    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credetials)) {
            return redirect('/login')->with('success', 'les informations sont bien corrects');
        }
        return back()->with('error', 'L\'Email et le mot de passe sont incorrects');

        
    }
}
