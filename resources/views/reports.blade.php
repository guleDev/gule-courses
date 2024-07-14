@extends('layouts.main')

@section('title', 'Gule Courses')

@section('content')

    <h1>Gule Courses - Report</h1>

    <div class="courses row" style="gap: 15px; margin: 15px;">
        @foreach($users as $user)
            <div class="card col-sm-2" style="background-color:#4C5958; padding:0; border:2px solid #6a6d6d; heigt: auto;">
                <div class="card-body">
                    <p>ID:<br> {{ $user->id }}</p>
                    <p>Name:<br> {{ $user->name }}</p>
                    <p>Email:<br> {{ $user->email }}</p>
                    <p>Status:<br> 
                        @if($user->status == 1)
                            Online
                        @else
                            Offline
                        @endif 
                    </p>
                    <p>Purchased courses:<br> {{ $user->purchasedCourses }}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
