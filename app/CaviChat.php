<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class CaviChat extends Model
{
    /*
    |-----------------------------------------
    | SEND MESSAGE TO SLACK
    |-----------------------------------------
    */
    public function toSlack($payload){
    	$url 		= "https://hooks.slack.com/services/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";
    	$headers 	= array('Content-Type: application/json');
    	$query 		= array(
            'text' => trim($payload->g_message),
            'attachments' => array(
                0 => array(
                    'author_name' => $payload->g_name,
                    'text'        => $payload->g_subject,
                    'fields'      => array(
                        0 => array(
                            'title' => 'Priority',
                            'value' => 'High',
                            'short' => false
                        )
                    )
                ),
            )
        );

        // save to database
        $this->toDatabase($payload);

    	// body
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_POST, 1);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
    	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    	$res = curl_exec($ch);

    	$data = json_decode($res, true);

    	// return
    	return $data;
    }

    /*
    |-----------------------------------------
    | SEND TO DATABASE
    |-----------------------------------------
    */
    public function toDatabase($payload){
    	// body
    	$new_chat 			   = new CaviChat();
    	$new_chat->name 	   = $payload->g_name;
    	$new_chat->email       = $payload->g_email;
    	$new_chat->message 	   = $payload->g_message;
        $new_chat->subject     = $payload->g_subject;
        $new_chat->ticket_id   = 'C-'.time();
    	$new_chat->status      = 'unread';
    	$new_chat->save();
    }		
}
