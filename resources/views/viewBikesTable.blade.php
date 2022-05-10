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
            <th style="color: #ffffff">action</th>
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
                <a  class="@if($bike->  is_active) btn btn-primary @else btn btn-danger @endif" href="{{route('admin.isActive',$bike->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z"/>
                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                      </svg>
                    </a>
            </td>
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