<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

use App\Models\Course;
use App\Models\User;
use App\Models\Module;
use App\Models\Content;

class CourseController extends Controller
{
    public function index() {

        $search = request("search");

        if($search){
            $courses = Course::where([
                ['title', 'like', "%".$search."%"]
            ])->get();
        } else{
            $courses = Course::all();
        }

        return view('courses', ['courses' => $courses, 'search' => $search]);
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
        $courseOwner = User::where('id', $course->userID)->first();
        $students = User::whereIn('id', $course->purchased)->get();
        $module = Module::where('courseID', $course->id)->get()->toArray();
        #$content = Content::where('courseID', $course->id)->where('moduleID', $module->id)->get();

        return view('/courses.show', ['course' => $course, 'courseOwner' => $courseOwner,'students' => $students ,'modules' => $module]);
    }
}
