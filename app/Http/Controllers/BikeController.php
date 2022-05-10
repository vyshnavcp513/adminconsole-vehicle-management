<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;


class BikeController extends Controller
{
    public function viewCreateBikes(){
        return view('formBike');
    }

    public function saveBike (Request $request)
   {
       $bike = new Bike();    //$bike = bike::find($id)
       $bike->name = $request->name;
       $bike-> model_year= $request->model_year;
       $bike->description = $request->description;
       $bike->company = $request->company;
       $image=$request->file('image');
       $imageName=time().$image->getClientOriginalName();
       $image->move(public_path('/images'),$imageName);
       $bike->images='/images/'.$imageName;
       $bike->save();
       return redirect('/')->with('status','bike added successfully');
   } 
   public function viewBikes(){
    $bikes = Bike::all();
    return view('viewBikesTable', compact('bikes'));
}
    public function editBikes($id){
        $bikes = Bike::find($id);
        return view('bikesEditForm', compact('bikes'));
    }

    public function updateBikes(Request $request){
    $bike = Bike::find($request->id);
        $bike->name = $request->name;
        $bike->model_year= $request->model_year;
        $bike->description = $request->description;
        $bike->company = $request->company;
        $bike->save();
        return redirect()->back()->with(["success"=>'update successfully']);
    
    
    }
    public function deleteBikes($id){
        $bike = bike::find($id);
        $bike->delete();
        return redirect()->back()->with('status','Deleted Successfully');
 
    }
     public function isActive($id){
         $bike=bike::find($id);
        //  dd($bike);
         $bike->is_active=$bike->isActive();
         $bike->save();
         return redirect()->back()->with(['success' =>'toggle successfully']);
     }
}
