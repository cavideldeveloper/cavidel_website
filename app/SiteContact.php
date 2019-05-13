<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class SiteContact extends Model
{
    /*
    |---------------------------------------------
    | CONTACT US
    |---------------------------------------------
    */
    public function contactUs($payload){

		$contact_us 					= new SiteContact();
		$contact_us->email 				= $payload->email;
		$contact_us->name 				= $payload->name;
		$contact_us->phone 				= $payload->phone;
		$contact_us->body 				= $payload->message;
		$contact_us->visitor_ip 		= $payload->client_ip;
		$contact_us->visitor_browser 	= $payload->client_browser;
		$contact_us->visitor_device 	= $payload->client_device;
		$contact_us->status 			= "active";
		if($contact_us->save()){
			$data = [
    			'status' 	=> 'success',
    			'message' 	=> 'Thanks for contacting Cavidel, we will get back to you shortly.',
    		];
		}else{
			$data = [
    			'status' 	=> 'error',
    			'message' 	=> 'could not save subscription at the moment!',
    		];
		}

    	// return 
    	return $data;
    }

    /*
    |-----------------------------------------
    | DISPATCH QUEUE
    |-----------------------------------------
    */
    public function clearQueueMails(){
        // body
        
    }
}
