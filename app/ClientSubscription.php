<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class ClientSubscription extends Model
{
    /*
    |---------------------------------------------
    | SUBSCRIBE EMAIL
    |---------------------------------------------
    */
    public function subscribeMail($payload){
    	if($this->alreadySubscribe($payload->email)){
    		$data = [
    			'status' 	=> 'error',
    			'message' 	=> $payload->email.' already subscribed!',
    		];
    	}else{

    		$new_subscription 					= new ClientSubscription();
    		$new_subscription->email 			= $payload->email;
    		$new_subscription->client_ip 		= $payload->client_ip;
    		$new_subscription->client_browser 	= $payload->client_browser;
    		$new_subscription->client_device 	= $payload->client_device;
    		$new_subscription->status 			= "active";
    		if($new_subscription->save()){
    			$data = [
	    			'status' 	=> 'success',
	    			'message' 	=> $payload->email.' subscription was successful!',
	    		];
			}else{
				$data = [
	    			'status' 	=> 'error',
	    			'message' 	=> 'could not save subscription at the moment!',
	    		];
			}
    	}

    	// return 
    	return $data;
    }

    /*
    |---------------------------------------------
    | CHECK ALREADY SUBSCRIBE
    |---------------------------------------------
    */
    public function alreadySubscribe($email){
    	$already_subscribe = ClientSubscription::where("email", $email)->first();
    	if($already_subscribe !== null){
    		return true;
    	}else{
    		return false;
    	}
    }
}
