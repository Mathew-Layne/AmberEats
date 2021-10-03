<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealCategory;
use App\Models\MealChoice;
use Illuminate\Support\Facades\Auth;

class MealOptionController extends Controller
{
    public function getOrder(){
        $orders = MealCategory::with('options')->get()->toArray();
        // dd($orders);
        return view('order', compact('orders'));
    }

    public function setOrder(Request $request){


        // dd($request->all());
   
        MealChoice::create([
            'user_id' => Auth::id(),
            'meal_option_id' => $request->Meat
        ]);

        MealChoice::create([
            'user_id' => Auth::id(),
            'meal_option_id' => $request->Starch
        ]);

        MealChoice::create([
            'user_id' => Auth::id(),
            'meal_option_id' => $request->Beverage
        ]);

        MealChoice::create([
            'user_id' => Auth::id(),
            'meal_option_id' => $request->Vegetable
        ]);

        


        return redirect('/');
    }
}
