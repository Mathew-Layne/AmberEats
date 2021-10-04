<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MealCategory;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function home(){
        return view('index');
    }

    public function getRegister(){
        return view('register');
    }

    public function setRegister(Request $request){

        $valid = $request->validate([
            'fname' => 'Required',
            'lname' => 'Required',
            'email' => 'Required|email',
            'pwd' => 'Required|min:8'
        ]);

        $user = new User();
        $user->first_name = $request->fname;
        $user->last_name = $request->lname;
        $user->username = $request->fname;
        $user->email = $request->email;
        $user->password = Hash::make($request->pwd);
        $user->save();

        return redirect('/login');
    }

    public function menu(){

        $orders = MealCategory::with('options')->get()->toArray();
        
        return view('menu', compact('orders'));
    }
}
