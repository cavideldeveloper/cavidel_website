<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;
use Cavidel\Mail\NotifyNewOrder;
use Cavidel\Product;
use Cavidel\Contact;
use Cavidel\OrderAddon;
use Mail;

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


    	// new order
    	$new_order 			= new Order();
    	$new_order->name 	= $payload->names;
    	$new_order->email 	= $payload->email;
    	$new_order->message = $payload->message;
    	$new_order->status  = false;
    	$new_order->save();

    	// get software types
    	foreach ($payload->software as $key => $value) {
    		# code...
    		$product_info = $all_products->where("id", $value)->first();
    		if($product_info !== null){
    			array_push($soft_box, $product_info);
    		}

    		// trap data to database
    		$order_addon = new OrderAddon();
    		$order_addon->addNewFromLoop($new_order->id, $value);
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

    /*
    |-----------------------------------------
    | GET ALL ORDERS
    |-----------------------------------------
    */
    public function getOrders(){
        // body
        $orders = Order::orderBy('created_at', 'DESC')->get();
        $orders_box = [];

        $products       = new Product();
        $all_products   = collect($products->getAllProducts());
        $soft_box = [];
        foreach ($orders as $key => $value) {
            $order_addon = OrderAddon::where('order_id', $value->id)->get();
            foreach ($order_addon as $key => $value) {
                # code...
                $product_info = $all_products->where("id", $value->product_id)->first();
                if($product_info !== null){
                    array_push($soft_box, $product_info);
                }
            }
            $data = [
                "name"  => $value->name ?? "Test User",
                "email" => $value->email ?? "test@gmail.com",
                "body"  => $value->message ?? "I will like a demo of the software!",
                "software_lists" => $soft_box
            ];

            // orders array
            array_push($orders_box, $data);
        }

        // return data
        return $orders_box;  
    }
}
