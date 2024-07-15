<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Course;
use App\Models\Module;
use App\Models\Content;

class UserController extends Controller
{
    public function index() {

        $user = User::orderBy('purchasedCourses', 'asc')->get();
        $course = Course::orderBy('id', 'asc')->get();
        $courseIDs = $course->pluck('id');
        $module = Module::whereIn('courseID', $courseIDs)->get();
        $moduleIDs = $module->pluck('courseID');
        $content = Content::whereIn('courseID', $courseIDs)->get();
        $contentIDs = $content->pluck('courseID');

        return view('/reports', ['users' => $user, 'courses' => $course, 'modules' => $module, 'contents' => $content, 'moduleIDs' => $moduleIDs, 'contentIDs' => $contentIDs]);    
    }
}
