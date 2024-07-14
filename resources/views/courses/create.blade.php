@extends('layouts.main')

@section('title', 'Create a course')

@section('content')

    <div class="course-create-contain col-md-6 offset-md-3">
        <h1>Create your course</h1>
        <form action="/courses" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Course</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Course Name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Course Description">
            </div>
            <input type="submit" class="btn btn-primary" value="Create Course">
        </form>
    </div>

@endsection