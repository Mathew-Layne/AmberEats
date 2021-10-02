<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealCategory;

class MealOptionController extends Controller
{
    public function getOrder(){
        $orders = MealCategory::with('options')->get()->toArray();
        // dd($orders);
        return view('order', compact('orders'));
    }

    public function setOrder(Request $request){

    }
}
