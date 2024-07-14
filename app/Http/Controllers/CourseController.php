<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

use App\Models\Course;
use App\Models\Module;

class CourseController extends Controller
{
    public function index() {

        $courses = Course::all();

        return view('courses', ['courses' => $courses]);    
    }

    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        
        $course = new Course;
    
        $course->uniqueCode = 'C004';
        $course->title = $request->title;
        $course->description = $request->description;
        $course->userID = 1;
        $course->purchased = 0;

        $course->save();

        return redirect('/courses');
    }

    public function show($uniqueCode){

        $course = Course::where('uniqueCode', $uniqueCode)->firstOrFail();

        return view('courses.show', ['course' => $course]);
    }
}
