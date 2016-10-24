<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomePageController extends Controller
{
    public function deneme(){
        return view('static');
    }
}
