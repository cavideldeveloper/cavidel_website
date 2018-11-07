<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;

class ExternalPagesController extends Controller
{
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
    | SHOW ABOUT US
    |---------------------------------------------
    */
    public function portfolio(){
    	return view('pages.portfolio');
    }

    /*
    |---------------------------------------------
    | SHOW ABOUT US
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
