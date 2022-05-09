<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function viewCreateCars(){
        return view('formCar');
    }
}
