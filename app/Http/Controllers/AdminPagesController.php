<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    /*
    |---------------------------------------------
    | SHOW DASHBOARD
    |---------------------------------------------
    */
    public function dashboard(){
    	return view('__admin.dashboard');
    }

    /*
    |---------------------------------------------
    | SHOW ISSUES
    |---------------------------------------------
    */
    public function issues(){
    	return view('__admin.issues');
    }

    /*
    |---------------------------------------------
    | SHOW PROJECTS
    |---------------------------------------------
    */
    public function projects(){
    	return view('__admin.projects');
    }

    /*
    |---------------------------------------------
    | SHOW TASK
    |---------------------------------------------
    */
    public function tasks(){
    	return view('__admin.tasks');
    }
}
