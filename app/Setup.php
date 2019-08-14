<?php

namespace Cavidel;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
	// protected $table = "setups";
	// protected $guard = "id";
	// public $primaryKey = "id";

    /*
    |-----------------------------------------
    | INIT SETUP TABLE
    |-----------------------------------------
    */
    public function initSetupTable(){
    	// body
    	
    }

    /*
    |-----------------------------------------
    | ADD TO DESIGNATION SETUP
    |-----------------------------------------
    */
    public function addDesignation($payload){
	    
	    $already_exist = Setup::where("designation", $payload->designation)->first();
	    if($already_exist !== null){
	    	$data = [
	    		'status' 	=> 'error',
	    		'message' 	=> 'Job role already exist!'
	    	];
	    }else{
	    	// body
	    	$designation 				= new Setup();
	    	$designation->designation 	= $payload->designation;
	    	$designation->role 			= $payload->role;
	    	$designation->level 		= $payload->level;
	    	$designation->status 		= $payload->status;
	    	if($designation->save()){
	    		$data = [
	    			'status' 	=> 'success',
	    			'message' 	=> 'Designation added'
	    		];
	    	}else{
	    		$data = [
	    			'status' 	=> 'error',
	    			'message' 	=> 'Error adding job role, try again!'
	    		];
	    	}
	    }

    	// return
    	return $data;
    }			

    /*
    |-----------------------------------------
    | GET ALL DESIGNATION
    |-----------------------------------------
    */
    public function getDesignation($payload){
    	// body
    	$designations = Setup::orderBy("id", "DESC")->get();
    	$designations_box = [];

    	foreach ($designations as $key => $value) {

    		$value->role 	= 'Admin';
    		$value->level 	= 'Top Level';

    		$data = [
    			'id' 			=> $value->id,
    			'designation' 	=> $value->designation,
    			'role' 			=> $value->role,
    			'level' 		=> $value->level,
    			'created_at' 	=> $value->created_at->diffForHumans()
    		];

    		array_push($designations_box, $data);
    	}


    	// return
    	return $designations_box;
    }

    /*
    |-----------------------------------------
    | UPDATE DESIGNATION
    |-----------------------------------------
    */
    public function updateOneDesignation($payload){
    	// body
    	$designation = Setup::find($payload->id);
    	if($designation !== null){
    		$designation->designation = $payload->designation;
    		if($designation->update()){
    			$data = [
    				'status' 	=> 'success',
    				'message' 	=> 'Updated!'
    			];
    		}else{
    			$data = [
    				'status' 	=> 'error',
    				'message' 	=> 'Error updating designation, try again!'
    			];
    		}
    	}else{
    		$data = [
    			'status' 	=> 'error',
    			'message' 	=> 'Could not find designation, try again!'
    		];
    	}

    	// return
    	return $data;
    }

    /*
    |-----------------------------------------
    | GET ONE DESINGATION
    |-----------------------------------------
    */
    public function getOneDesignation($payload){
    	// body
    	$designation = Setup::where("id", $payload->id)->first();
    	if ($designation !== null) {
    		$data = [
    			'id' 			=> $designation->id,
    			'designation' 	=> $designation->designation,
    			'role' 			=> $designation->role,
    			'level' 		=> $designation->level,
    			'created_at' 	=> $designation->created_at->diffForHumans()
    		];
    	}else{
    		$data = [];
    	}

    	// return
    	return $data;
    }
}
