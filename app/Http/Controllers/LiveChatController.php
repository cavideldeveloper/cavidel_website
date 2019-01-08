<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\CaviChat;

class LiveChatController extends Controller
{
    /*
    |-----------------------------------------
    | SEND CHAT MESSAGES
    |-----------------------------------------
    */
    public function sendMessageToSlack(Request $request){
    	// body
    	$cavi_chat 	= new CaviChat();
    	$data 		= $cavi_chat->toSlack($request);

    	// return response.
    	return response()->json($data); 
    }

    /*
    |-----------------------------------------
    | REQUEST CHAT LIVE
    |-----------------------------------------
    */
    public function requestChat(Request $request){
    	// body
    	// body
    	$cavi_chat 	= new CaviChat();
    	$data 		= $cavi_chat->toSlack($request);

    	// return response.
    	return response()->json($data); 
    }

    /*
    |-----------------------------------------
    | GET CHAT MESSAGES
    |-----------------------------------------
    */
    public function loadChatMessages(){
    	// body
    	
    }
}
