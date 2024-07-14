@extends('layouts.main')

@section('title', 'Gule Courses')

@section('content')

    <h1>Gule Courses</h1>

    <div class="courses row" style="gap: 15px; margin: 15px;">
        @foreach($courses as $course)
        <div class="card col-sm-2" style="background-color:#4C5958; padding:0; border:2px solid #6a6d6d;">
            <img class="card-img-top" src="/img/phpElephant.png" alt="Course Image">
            <div class="card-body">
                <h3 class="card-title">{{ $course->title }}</h3>
                <p class="card-text" >{{ $course->description }}</p>
                <p class="card-text">Modules:<p>
                <a href="/courses/{{ $course->uniqueCode }}">{{ $course->uniqueCode }}</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
