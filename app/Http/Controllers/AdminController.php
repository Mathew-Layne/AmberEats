<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealCategory;
use App\Models\User;
use App\Models\MealOption;

class AdminController extends Controller
{
    public function viewOrders(){
        session()->put('admin', 'orders');

        $orders = User::with('choice')        
        ->get()
        ->toArray();

        return view('myorder', compact('orders'));
    }
    

    public function getCategory()
    {
        session()->put('admin', 'category');
        return view('order');
    }

    public function setCategory(Request $request)
    {
        $category = new MealCategory();
        $category->category_name = $request->category;
        $category->save();
        return redirect('/');
    }


    public function getOption()
    {
        session()->put('admin', 'option');
        $category = MealCategory::all();
        return view('order', compact('category'));
    }

    public function setOption(Request $request)
    {
        $option = new MealOption();
        $option->meal_category_id = $request->category_id;
        $option->option_name = $request->option;
        $option->save();
        return redirect('/');
    }
}
