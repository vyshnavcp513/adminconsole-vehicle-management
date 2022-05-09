<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarsController extends Controller
{
    public function viewCreateCars(){
        return view('formCar');
    }
    public function saveCar (Request $request)
   {
       $car = new Car();    //$car = car::find($id)
       $car->name = $request->name;
       $car-> model_year= $request->model_year;
       $car->description = $request->description;
       $car->company = $request->company;
       $car->save();
       return redirect('/')->with('status','car added successfully');
   } 
}
