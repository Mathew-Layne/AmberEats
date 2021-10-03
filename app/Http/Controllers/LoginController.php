<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function setLogin(Request $request){
        $valid = $request->validate([
            'email' => 'Required|email',
            'password' => 'Required',
        ]);

        if(Auth::attempt($valid)){

            $request->session()->regenerate();

            return redirect('/');

        }
            return back()->withErrors([
                'email' => 'Invalid Login or Password',
            ]);
        
        return redirect('/');
    }
    

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
