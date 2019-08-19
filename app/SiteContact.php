<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;
use Cavidel\Mail\SendContactMail;
use Mail;

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
		$contact_us->visitor_ip 		= $payload->ip();
		$contact_us->visitor_browser 	= $payload->server('HTTP_USER_AGENT');
		$contact_us->visitor_device 	= $payload->header('User-Agent');
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
        $contact_messsage = SiteContact::where('status', 'active')->get();
        $total = 0;
        foreach ($contact_messsage as $key => $value) {
            # code...
            $mail_data = [
                "name"  => $value->name,
                "email" => $value->email,
                "body"  => $value->message,
            ];

            \Mail::to(env('SUPPORT_EMAIL'))->send(new SendContactMail($mail_data));

            $update = SiteContact::find($value->id);
            $update->status = 'sent';
            $update->update();

            $total++;
        }

        $data = [
            'status'    => 'success',
            'message'   => $total.' message(s) has been cleared'
        ];

        return $data;
    }

    /*
    |-----------------------------------------
    | GET MESSAGES
    |-----------------------------------------
    */
    public function getMessages(){
        // body
        $site_contacts = SiteContact::orderBy('created_at', 'DESC')->get();
        $contact_box = [];

        foreach ($site_contacts as $key => $value) {
            $data = [
                'email'             => $value->email,
                'name'              => $value->name,
                'phone'             => $value->phone,
                'body'              => $value->body,
                'visitor_ip'        => $value->visitor_ip,
                'visitor_browser'   => $value->visitor_browser,
                'visitor_device'    => $value->visitor_device,
                'status'            => $value->status,
                'created_at'        => $value->created_at->diffForHumans()
            ];

            array_push($contact_box, $data);
        }

        // return
        return $contact_box;
    }
}
