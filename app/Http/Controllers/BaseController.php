<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        return view('index');
    }

    public function service(){
        return view('index');
    }

    public function company(){
        return view('index');
    }

    public function contact(){
        return view('index');
    }
}
