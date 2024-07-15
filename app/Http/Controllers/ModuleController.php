<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Module;

class ModuleController extends Controller
{
    public function countModules($courseId = 1){

        $moduleCount = Module::where('courseID', $courseId)->count();
        
        return view('/reports', ['moduleCount' => $moduleCount]);
    }
}
