@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="page-header">
                    <h2>Create a project</h2>
                </div>
                <div>
                    <form action="/projects" method="POST" class="container">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>

                            <div class="control">
                                <input type="text" class="form-control" placeholder="title" name="title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>

                            <div class="control">
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary">Create project</button>
                        <a href="/projects" class="btn btn-primary">Cancel</a>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection