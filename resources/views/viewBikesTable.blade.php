@extends('theme.welcome')
@section('title')
table form
@endsection
@section('content')
<table style="color: white" id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th style="color: white">Name</th>
            <th style="color: white">model_year</th>
            <th style="color: white">description</th>
            <th style="color: white">company</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody style="color: white">
        @foreach ($bikes as $bike)
        <tr>
            <td>{{$bike->name}}</td>
            <td>{{$bike->model_year}}</td>
            <td>{{$bike->description}}</td>
            <td>{{$bike->company}}</td>
            <td>
                <a  class="btn btn-primary" href="{{route('admin.editBikes',$bike->id)}}">edit</a>
            </td>
            <td>
                
                <a  href="{{route('admin.deleteBikes',$bike->id)}}"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$bike->id}}">
                    Delete
                  </button></a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>

@endsection