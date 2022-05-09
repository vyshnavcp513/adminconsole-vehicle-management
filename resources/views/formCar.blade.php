@extends('theme.welcome')
@section('title')
bike create form
@endsection
@section('content')
<form action="{{route('admin.saveCar')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name" class="required form-label" style="color: white">name<small class="text-danger">*</small></label>
      <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Enter vehicle name " required>
    </div>
    <div class="form-group">
      <label for="mode_lyear" style="color: white" >model year<small class="text-danger">*</small></label>
      <input type="text" class="form-control" name="model_year" placeholder="enter vehicle model year" required>
    </div>
    <div class="form-group">
        <label for="description" style="color: white" >description</label>
        <input type="text" class="form-control" name="description" placeholder="enter description" required>
      </div>

      <div class="form-group">
        <label for="company" style="color: white" >company</label>
        <input type="text" class="form-control" name="company" placeholder="enter the vehicle company">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection