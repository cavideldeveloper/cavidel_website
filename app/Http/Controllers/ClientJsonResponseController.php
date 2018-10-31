<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\NewsHeadline;

class ClientJsonResponseController extends Controller
{
    /*
    |---------------------------------------------
    | SHOW LATEST NEWS HEADLINES
    |---------------------------------------------
    */
    public function loadNews(){
    	$news = new NewsHeadline();
    	$data = $news->displayNewsHeadlines();

    	// return response
    	return response()->json($data);
    }
}
