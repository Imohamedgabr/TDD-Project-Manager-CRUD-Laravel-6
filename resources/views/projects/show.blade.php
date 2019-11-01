@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="page-header">
                    <h2>{{$project->title}}</h2>
                </div>
                <div>
                    {{$project->description}}
                </div>

                <div class="row">
                    <h3>Tasks</h3>

                    @foreach($project->tasks as $task )
                        <h4>{{$task->body}} </h4>
                        <br>
                    @endforeach
                </div>
                <br>
                <a class="btn btn-primary" href="/projects">Go Back</a>
            </div>
        </div>
    </div>
@endsection