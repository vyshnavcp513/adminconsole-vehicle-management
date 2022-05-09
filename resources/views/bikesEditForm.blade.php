@extends('theme.welcome')
@section('title')
bikes edit form 
@endsection
@section('content')
<form action="{{route('admin.updateBikes',$bikes->id)}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name" class="required form-label" style="color: white">name<small class="text-danger">*</small></label>
      <input type="text" value="{{$bikes->name}}" class="form-control" name="name" aria-describedby="name" placeholder="Enter vehicle name " required>
    </div>
    <div class="form-group">
      <label for="model_year" style="color: white" >model year<small class="text-danger">*</small></label>
      <input type="text" value="{{$bikes->model_year}}" class="form-control" name="model_year" placeholder="enter vehicle model year" required>
    </div>
    <div class="form-group">
        <label for="description" style="color: white" >description<small class="text-danger">*</small></label>
        <input type="text" value="{{$bikes->description}}" class="form-control" name="description" placeholder="enter description" required>
      </div>

      <div class="form-group">
        <label for="company" style="color: white" >company</label>
        <input type="text" value="{{$bikes->company}}" class="form-control" name="company" placeholder="enter vehicle company name">
      </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>
@endsection