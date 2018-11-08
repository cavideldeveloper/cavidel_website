<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;

class ExternalPagesController extends Controller
{

	/*
	|---------------------------------------------
	| SHOW INDEX (ENTRY POINT)
	|---------------------------------------------
	*/
	public function index(){
		return view('index');
	}

    /*
    |---------------------------------------------
    | SHOW ABOUT US
    |---------------------------------------------
    */
    public function about(){
    	return view('pages.about');
    }

    /*
    |---------------------------------------------
    | SHOW TEAM
    |---------------------------------------------
    */
    public function team(){
    	return view('pages.team');
    }

    /*
    |---------------------------------------------
    | SHOW PORTFOLIO
    |---------------------------------------------
    */
    public function portfolio(){
    	return view('pages.portfolio');
    }

    /*
    |---------------------------------------------
    | SHOW PROJECTS
    |---------------------------------------------
    */
    public function projects(){
    	return view('pages.projects');
    }

    /*
    |---------------------------------------------
    | SHOW CONTACT US
    |---------------------------------------------
    */
    public function contact(){
    	return view('pages.contact');
    }

    /*
    |---------------------------------------------
    | SHOW EVENT
    |---------------------------------------------
    */
    public function events(){
    	return view('pages.events');
    }
}
