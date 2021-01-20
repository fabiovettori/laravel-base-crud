<?php

namespace App\Http\Controllers;
use App\Dress;

use Illuminate\Http\Request;

// controller for views
class Homecontroller extends Controller
{
    public function index(){
        return view('layouts.home');
    }

    public function men(){
        return view('layouts.men');
    }
}
