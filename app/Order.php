<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;
use Cavidel\Mail\NotifyNewOrder;
use Cavidel\Product;

class Order extends Model
{
    /*
    |-----------------------------------------
    | PLACE NEW ORDER
    |-----------------------------------------
    */
    public function placeOrder($payload){

    	$products 		= new Product();
    	$all_products 	= collect($products->getAllProducts());
    	// soft box
    	$soft_box = [];

    	// get software types
    	foreach ($payload->software as $key => $value) {
    		# code...
    		$product_info = $all_products->where("id", $value)->first();
    		if($product_info !== null){
    			array_push($soft_box, $product_info);
    		}	
    	}

    	// body
    	$mail_data = [
    		"name" 	=> $payload->names ?? "Test User",
    		"email" => $payload->email ?? "test@gmail.com",
    		"body" 	=> $payload->message ?? "I will like a demo of the software!",
    		"software_lists" => $soft_box
    	];

    	\Mail::to(env('SUPPORT_EMAIL'))->send(new NotifyNewOrder($mail_data));

    	$data = [
    		'status' 	=> 'success',
    		'message' 	=> 'Order sent!'
    	];

    	return $data;	
    }
}
