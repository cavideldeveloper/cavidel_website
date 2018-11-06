<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\Project;
use Cavidel\Documentation;

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
    | SHOW BUILDER 
    |---------------------------------------------
    */
    public function cms(){
        return view('__admin.cms');
    }

    /*
    |---------------------------------------------
    | SHOW SUBSCRIPTIONS
    |---------------------------------------------
    */
    public function subscriptions(){
        return view('__admin.subscriptions');
    }

    /*
    |---------------------------------------------
    | SHOW SINGLE PROJECT
    |---------------------------------------------
    */
    public function viewProject($id){
        $project    = Project::where("id", $id)->first();
        $docs       = Documentation::getDocs($id);
        return view('__admin.view-project', compact('id', 'project', 'docs'));
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
