<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class SiteVisitor extends Model
{
    /*
    |---------------------------------------------
    | ADD NEW VISITOR
    |---------------------------------------------
    */
    public function addVisitor($payload){

    	$new_visitor 					= new SiteVisitor();
    	$new_visitor->visitor_ip	 	= $payload->visitor_ip;
    	$new_visitor->visitor_browser 	= $payload->visitor_browser;
    	$new_visitor->visitor_device 	= $payload->visitor_device;
    	$new_visitor->status 			= $payload->status;
    	if($new_visitor->save()){
    		$data = [
    			'status' 	=> 'success',
    			'message' 	=> 'Visitor added!',
    		];
    	}else{
    		$data = [
    			'status' 	=> 'error',
    			'message' 	=> 'Failed to add visitor',
    		];
    	}
	    
	    // return 
	    return $data;
    }
}
