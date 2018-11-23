<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /*
    |-----------------------------------------
    | ADD NEW TEAM MEMBER
    |-----------------------------------------
    */
    public function addNewMemeber($payload){
    	// body
    	$new_member 			= new Team();
    	$new_member->firstname 	= $payload->firstname;
    	$new_member->lastname 	= $payload->lastname;
    	$new_member->position 	= $payload->position;
    	$new_member->email 		= $payload->email;
    	$new_member->description = $payload->description;
    	$new_member->avatar 	= $payload->avatar;
    	$new_member->status 	= $payload->status;

    	if($new_member->save()){
    		$data = [
    			'status' 	=> 'success',
    			'message' 	=> $payload->firstname.' Added!'
    		];
    	}else{
    		$data = [
    			'status' 	=> 'error',
    			'message' 	=> 'Could not add member!'
    		];
    	}

    	// return 
    	return $data;
    }

    /*
    |-----------------------------------------
    | UPDATE TEAM MEMBER
    |-----------------------------------------
    */
    public function updateMemberInfo($payload){
    	// body
    	$new_member 				= Team::find($payload->team_id);
    	$new_member->firstname 		= $payload->firstname;
    	$new_member->lastname 		= $payload->lastname;
    	$new_member->position 		= $payload->position;
    	$new_member->email 			= $payload->email;
    	$new_member->description 	= $payload->description;
    	$new_member->avatar 		= $payload->avatar;
    	$new_member->status 		= $payload->status;
    	if($new_member->update()){
    		$data = [
    			'status' 	=> 'success',
    			'message' 	=> $payload->firstname.' profile updated successfully!'
    		];
    	}else{
    		$data = [
    			'status' 	=> 'error',
    			'message' 	=> 'Could not add member!'
    		];
    	}

    	// return 
    	return $data;
    }

    /*
    |-----------------------------------------
    | DELETE TEAM MEMBER
    |-----------------------------------------
    */
    public function deleteMember($team_id){
    	// body
    	$member = Team::find($team_id);
    	if($member !== null){
    		$member->status = 'inactive';
    		if($member->update()){
    			$data = [
    				'status' 	=> 'success',
    				'message' 	=> 'Members deleted successfully!'
    			];
    		}else{
    			$data = [
    				'status' 	=> 'error',
    				'message' 	=> 'Failed to delete member from Team'
    			];
    		}
    	}else{
    		$data = [
				'status' 	=> 'error',
				'message' 	=> 'Could not find member on Team'
			];
    	}

    	// return 
    	return $data;
    }

    /*
    |-----------------------------------------
    | RESTORE TEAM MEMBER
    |-----------------------------------------
    */
    public function restoreMemember($team_id){
    	// body
    	$member = Team::find($team_id);
    	if($member !== null){
    		$member->status = 'active';
    		if($member->update()){
    			$data = [
    				'status' 	=> 'success',
    				'message' 	=> 'Members restored successfully!'
    			];
    		}else{
    			$data = [
    				'status' 	=> 'error',
    				'message' 	=> 'Failed to restore member from Team'
    			];
    		}
    	}else{
    		$data = [
				'status' 	=> 'error',
				'message' 	=> 'Could not find member on Team'
			];
    	}

    	// return 
    	return $data;
    }

    /*
    |-----------------------------------------
    | GET ALL TEAM
    |-----------------------------------------
    */
    public function getAllTeam(){
    	// body
    	$team = Team::orderBy('id', 'created_at')->get();

    	// return
    	return $team;
    }
}
