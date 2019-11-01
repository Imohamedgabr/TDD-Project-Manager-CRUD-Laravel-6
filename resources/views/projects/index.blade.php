@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="page-header mb-4">
                    <a href="/projects/create">Create project</a>
                </div>
                @forelse($projects as $project)
                <div class="card">
                    <div class="card-header">
                        <a href="{{ $project->path() }}">{{$project->title}}</a>
                    </div>

                    <div class="card-body">
                        {{$project->description}}
                    </div>
                </div>
                @empty
                    <div class="card-header">
                        No projects yet
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection