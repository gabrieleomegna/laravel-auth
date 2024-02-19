@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                These are all your available projects, {{Auth::user()->name}}
            </h2>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Completion date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $projects as $project)
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>{{$project->title}}</td>
                            <td>{{$project->author}}</td>
                            <td>{{$project->completion_date}}</td>
                            <td>
                                <a href="{{route('admin.projects.show', $project)}}">
                                    <button class="btn btn-sm btn-primary">View</button>
                                </a>
                                <button class="btn btn-sm btn-success">Edit</button>
                                <button class="btn btn-sm btn-warning">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <h3>There are no projects...</h3>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection