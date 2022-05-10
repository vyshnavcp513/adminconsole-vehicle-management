<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarsController extends Controller
{
    public function CreateCars(){
        return view('formCar');
    }
    public function saveCar (Request $request)
   {
       $car = new Car();    //$car = car::find($id)
       $car->name = $request->name;
       $car-> model_year= $request->model_year;
       $car->description = $request->description;
       $car->company = $request->company;
       $image=$request->file('image');
       $imageName=time().$image->getClientOriginalName();
       $image->move(public_path('/images'),$imageName);
       $car->images='/images/'.$imageName;
       $car->save();
       return redirect('/')->with('status','car added successfully');
   } 
   public function viewCars(){
    $cars = car::all();
    return view('viewCarTable', compact('cars'));
   }
   public function editCars($id){
    $cars = Car::find($id);
    return view('carsEditForm', compact('cars'));
}
public function updateCars(Request $request){
    $car = Car::find($request->id);
    
        $car->name = $request->name;
        $car->model_year= $request->model_year;
        $car->description = $request->description;
        $car->company = $request->company;
        if($request->file('image')){
            if($car->images){
                @unlink(public_path($car->images));
                $image=$request->file('image');
                $imageName=time().$image->getClientOriginalName();
                $image->move(public_path('/images'),$imageName);
                $car->images='/images/'.$imageName;
            }else{
                $image=$request->file('image');
                $imageName=time().$image->getClientOriginalName();
                $image->move(public_path('/images'),$imageName);
                $car->images='/images/'.$imageName;
            }
        }
        $car->save();
        return redirect()->back()->with(["success"=>'update successfully']);
    }
    public function deleteCars($id){
        $car = car::find($id);
        $car->delete();
        return redirect()->back()->with('status','Deleted Successfully');
 
    }
    // public function isActive($id){
    //     $car=car::find($id);
    //    //  dd($bike);
    //     $car->is_active=$car->isActive();
    //     $car->save();
    //     return redirect()->back()->with(['success' =>'toggle successfully']);
    // }

}
