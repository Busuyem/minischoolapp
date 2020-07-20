<?php

namespace App\Http\Controllers;

use App\User;
use App\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(){

        $users = User::latest()->paginate(5);

        return view("admin.dashboard", compact('users'));

    }

    public function courseList(){

       return view("users.courselist");
    }

    public function userDashboard(){

        return view("users.users");
    }

    public function deleteUser(User $user){

        if($user->id !== auth()->user()->id){

        foreach($user->courses as $course){

            $course->delete();
        }

        $user->delete();

        return back()->with('success', 'User has been successfully deleted');
    }

        return back()->with('delete', 'unauthorized to remove the Administrator');
    }

}
