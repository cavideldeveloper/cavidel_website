<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class OrderAddon extends Model
{
    /*
    |-----------------------------------------
    | ADD NEW ORDER
    |-----------------------------------------
    */
    public function addNewFromLoop($order_id, $product_id){
    	// body
    	$order_addon 				= new OrderAddon();
    	$order_addon->order_id 		= $order_id;
    	$order_addon->product_id 	= $product_id;
    	$order_addon->save();
    }
}
