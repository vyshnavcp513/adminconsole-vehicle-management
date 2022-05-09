@extends('theme.welcome')
@section('title')
home page
@endsection
@section('content')
<div class="container">
    <div class="row">

    <div class="col">
            <a class="btn btn-primary" style="color: white" href="{{route('admin.viewCars')}}" role="button">Add Car</a>
    </div>    
    <div class="h-50"></div>    
    <div class="col">
        <a class="btn btn-primary" style="color: white"  href="{{route('admin.viewCars')}}" role="button">View Car</a>
    </div>
    <div class="w-100,h-100"></div>
    <div class="col">
        <a class="btn btn-primary" style="color: white" href="{{route('admin.viewCreateBikes')}}" role="button">Add Bike</a>
    </div>  
    <div class="h-50"></div>
    <div class="col">
        <a class="btn btn-primary" style="color: white" href="{{route('admin.viewBikes')}}" role="button">View Bike</a>
    </div>
    </div>
@endsection

