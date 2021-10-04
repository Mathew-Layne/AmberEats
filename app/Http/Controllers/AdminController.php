<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewOrders(){
        return view('admin');
    }
    

    public function getCategory()
    {
        return view('admin');
    }

    public function setCategory()
    {
        return view('admin');
    }


    public function getOption()
    {
        return view('admin');
    }

    public function setOption()
    {
        return view('admin');
    }
}
