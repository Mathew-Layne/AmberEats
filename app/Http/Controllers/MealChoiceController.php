<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealChoice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MealChoiceController extends Controller
{
    public function myChoice(){
        $data = User::with('choice')
        ->where('id', '=', Auth::id())
        ->get()
        ->toArray();
        // dd($data);
        return view('myorder', compact('data'));
    }
}
