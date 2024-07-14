@extends('layouts.main')

@section('title', $course->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/phpElephant.png" class="img-fluid" alt="{{ $course->name }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $course->title }}</h1>
                <p>{{ $course->description }}</p>
                <div>
                    <ul>
                        <p>Students:</p>
                        @foreach($course->purchased as $student)
                            <ul style="color: #fff;">{{ $student }}</ul>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <p>Created: {{ $course->created_at }}</p>
        <p>Last update: {{ $course->updated_at }}</p>
    </div>

@endsection