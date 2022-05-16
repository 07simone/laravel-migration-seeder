<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    //
    public function index(){
        $train = new Train();
        $trains = $train::paginate(10);
       /*  $time = Trains::where("orario_di_partenza", "<", "17:00:00")->get(); */
        return view('trains.index',[/* "time" => $time, */ "trains" => $trains]);
    }
        
    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id){
        $train = Train::findOrFail($id);
        return view("trains.show", ["train" => $train]);
    }
}
