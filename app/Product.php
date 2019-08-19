<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
    |-----------------------------------------
    | GET ALL PRODUCTS
    |-----------------------------------------
    */
    public function getAllProducts(){
    	// body
    	$all_products = Product::orderBy('id', 'DESC')->get();
    	$product_box = [];
    	foreach ($all_products as $key => $value) {
    		$product = [
    			'id' => $value->id,
                'name' => str_limit($value->name, 30, '...'),
    			'mail_name' => $value->name,
                'details' => str_limit($value->description, 50, '...'),
    			'mail_details' => $value->description,
    			'avatar' => $value->avatar,
    		];

    		array_push($product_box, $product);
    	}

    	// return
    	return $product_box;
    }

    /*
    |-----------------------------------------
    | GET ALL PRODUCTS
    |-----------------------------------------
    */
    public function getAllProduct(){
        // body
        
    }

    /*
    |-----------------------------------------
    | ADD NEW PRODUCTS
    |-----------------------------------------
    */
    public function addNewProduct($payload){
        // body
        $already_exist = Product::where('name', $payload->name)->first();
        if($already_exist == null){
        	$new_product 				= new Product();
        	$new_product->name 			= $payload->name;
        	$new_product->description 	= $payload->description;
        	$new_product->avatar 		= $payload->avatar ?? 'avatar.png';
        	if($new_product->save()){
        		$data = [
        			'status' 	=> 'success',
        			'message' 	=> $payload->name.' has been added successfully!'
        		];
        	}else{
        		$data = [
        			'status' 	=> 'error',
        			'message' 	=> 'Error adding new product, try again!'
        		];
        	}
        }else{
        	$data = [
        		'status' 	=> 'error',
        		'message' 	=> 'Products already exist!'
        	];
        }

        // return data
        return $data;
    }
}
