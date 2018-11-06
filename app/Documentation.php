<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{

    /*
    |-----------------------------------------
    | GET DOCUMENTATION
    |-----------------------------------------
    */
    public static function getDocs($id){
    	// body
    	$docs = Documentation::where("project_id", $id)->first();
    	if($docs !== null){
    		return $docs;
    	}else{
    		// create new docs with id
    		$new_docs 				= new Documentation();
    		$new_docs->project_id 	= $id;
    		$new_docs->contents 	= "
    			<h4>Welcome to Cavidel Documentation Sheet... </h4>
    			<p>Project Name: {Sample Project}</p>
    			<p>Project Client: {Cavidel Limited}</p>

    			<ul>
    				<li>Title 1</li>
    				<li>Title 2</li>
    				<li>Title 3</li>
    				<li>Title 4</li>
    				<li>Title 5</li>
    			</ul>

    			<h5>Another Heading... </h5>
    			<ul>
    				<li>Another title 1</li>
    				<li>Another title 2</li>
    				<li>Another title 3</li>
    				<li>Another title 4</li>
    				<li>Another title 5</li>
    			</ul>
    		";
    		$new_docs->save();

    		$docs = Documentation::where("project_id", $id)->first();

    		// return docs
    		return $docs;
    	}
    }
}
