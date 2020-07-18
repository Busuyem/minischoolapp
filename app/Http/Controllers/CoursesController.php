<?php

namespace App\Http\Controllers;

use App\User;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    
    public function addCourse(Request $request, Course $course){

        $data = $this->validate($request, [

            'course' => 'required|max:255',

            'reg' => 'required|max:255',

            'email' => 'email|required|max:255',

            'first_name' => 'required|max:255',

            'last_name' => 'required|max:255',

            'dept' => 'required|max:255',

            'lecturer' => 'required|max:255',

            'unit' => 'required|max:255',

            'session' => 'required|max:255',

            'semester' => 'required|max:255',

            'status' => 'required|max:255',

            'address' => 'required|max:255',

            'city' => 'required|max:255',

            'country' => 'required|max:255',

            'phone_number' => 'required|max:255',

        ]);

        $data['user_id'] = auth()->user()->id;

        $course->create($data);

        return redirect()->route('users.courses');



    }

    public function courseList(){

        $courseLists = auth()->user()->courses;

        return view("users.courselist", compact('courseLists'));
    }
}
