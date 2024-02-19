@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$project->proj_image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$project->title}}</h5>
                  <p class="card-text">{{$project->description}}</p>
                  <p class="card-text">Start date: {{$project->start_date}}</p>
                  <p class="card-text">Completion date: {{$project->completion_date}}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection