@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('admin.projects.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                  <label for="title">Project title</label>
                  <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('title')}}">
                </div>
                <div class="form-group mb-3">
                  <label for="author">Author</label>
                  <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="proj_image">URL image</label>
                    <input type="text" class="form-control" id="proj_image" name="proj_image" value="{{old('proj_image')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Type a description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="start_date">Date of starting the project</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{old('start_date')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="completion_date">Date of completing the project</label>
                    <input type="date" class="form-control" id="completion_date" name="completion_date" value="{{old('completion_date')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="no_days_taken">Number of days to make the project</label>
                    <input type="number" class="form-control" id="no_days_taken" name="no_days_taken" value="{{old('no_days_taken')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection