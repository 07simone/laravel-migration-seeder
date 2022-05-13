<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainsController extends Controller
{
    //
    public function index(){
        return view('trains.index');
    }
}
