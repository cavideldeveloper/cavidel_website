<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;

class HandleSlackMessageController extends Controller
{
    /*
    |-----------------------------------------
    | SHOW CLIENT MESSAGE
    |-----------------------------------------
    */
    public function showMessage(Request $request){
    	// body

    	// return response.
    	return response()->json($request);
    }
}
