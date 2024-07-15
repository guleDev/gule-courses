@extends('layouts.main')

@section('title', $course->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/phpElephant.png" class="img-fluid" alt="{{ $course->name }}">
                <p>Created by: {{ $courseOwner['name'] }}</p>
                <p>Created: {{ $course->created_at }}</p>
                <p>Last update: {{ $course->updated_at }}</p>
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $course->title }}</h1>
                <p>{{ $course->description }}</p>
                <div>
                    <ol>
                        <p>Students:</p>
                        @foreach($students as $student)
                            <li style="color: #fff;">{{ $student->name }}</li>
                        @endforeach
                    </ol>
                    <ul>
                        @foreach($modules as $module)
                            <li>
                                <h3>{{ $module['title'] }}</h3>
                                <p>{{ $module['description'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>

@endsection