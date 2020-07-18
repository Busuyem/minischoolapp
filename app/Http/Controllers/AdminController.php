<?php

namespace App\Http\Controllers;

use App\User;
use App\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(){

        $users = User::all();

        return view("admin.dashboard", compact('users'));

    }

    public function courseList(){

       return view("users.courselist");
    }

    public function userDashboard(){

        return view("users.users");
    }

}
