@extends('layouts.main')

@section('title', 'Gule Courses')

@section('content')

<div>
    <h2>Gule Courses - User Report</h2>
    <ul class="courses row" style="gap: 15px; margin: 15px;">
        @foreach($users as $user)
            <li class="card col-sm-2" style="background-color:#4C5958; padding:0; border:2px solid #6a6d6d; heigt: auto;">
                <div class="card-body">
                    <p>ID: {{ $user->id }}</p>
                    <p>Name:<br> {{ $user->name }}</p>
                    <p>Email:<br> {{ $user->email }}</p>
                    <p>Status:<br> 
                        @if($user->status == 1)
                            Online
                        @else
                            Offline
                        @endif 
                    </p>
                    <p>Purchased courses:<br> {{ count($user->purchasedCourses) }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>
<div>
    <h2>Gule Courses - Course Report</h2>
    <ul class="courses row" style="gap: 15px; margin: 15px;">
        @foreach($courses as $course)
            <li class="card col-sm-2" style="background-color:#4C5958; padding:0; border:2px solid #6a6d6d; heigt: auto;">
                <div class="card-body">
                    <p>Unique code: {{ $course->uniqueCode }}</p>
                    <p>Name:<br> {{ $course->title }}</p>
                    <?php
                        $moduleCount = 0;
                        foreach($moduleIDs as $moduleID)
                            if($moduleID == $course->id){
                                $moduleCount ++;
                            }
                    ?>
                    <p>Modules: {{ $moduleCount }}</p>
                    <?php
                        $contentCount = 0;
                        foreach($contentIDs as $contentID)
                            if($contentID == $course->id){
                                $contentCount ++;
                            }
                    ?>
                    <p>Content: {{ $contentCount }}</p>
                </div>
            </li>
            @endforeach
        </ul>
</div>

@endsection
