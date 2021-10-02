<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealChoiceController extends Controller
{
    public function user(){
        return $this->belondsTo(User::class);
    }
}
