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
    	$all_products = [
    		array(
    			"id" 	=> 1,
    			"name" 	=> "OfficeMate Premium",
                "details" => "Office Automation Software for Workflow, Assets, Finance and Staff Managment"
    		),
    		array(
    			"id" 	=> 2,
    			"name" 	=> "CATSS Premium",
                "details" => "Trading & Simulation software for all kinds of fixed income securities and equities."
    		),
    		array(
    			"id" 	=> 3,
    			"name" 	=> "TIMS Premium",
                "details" => "Trading, Investment and Managment system for all kinds of investments such as fixed, Capital and Loans"
    		)
    	];

    	// return
    	return $all_products;
    }
}
