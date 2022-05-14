<?php

namespace App\Http\Controllers;

use App\Trains;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    //
    public function index(){
        $trains = new Trains();
        $trains = $trains::all();

        $time = Trains::where("orario_di_partenza", "<", "17:00:00")->get();
        return view('trains.index',["time" => $time, "trains" => $trains]);
    }
}
