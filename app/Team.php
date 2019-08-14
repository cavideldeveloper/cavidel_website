<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;
use Cavidel\Setup;

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
    	$new_member->firstname 	= $payload->first_name;
    	$new_member->lastname 	= $payload->last_name;
    	$new_member->position 	= $payload->job_role;
    	$new_member->email 		= $payload->email;
    	$new_member->description = $payload->description;
    	$new_member->avatar 	= $payload->avatar;
    	$new_member->status 	= 'active';

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
    	$new_member 				= Team::find($payload->member_id);
    	$new_member->firstname 		= $payload->first_name;
    	$new_member->lastname 		= $payload->last_name;
    	$new_member->position 		= $payload->job_role;
    	$new_member->email 			= $payload->email;
    	$new_member->description 	= $payload->description;
    	$new_member->avatar 		= $payload->avatar;
    	$new_member->status 		= 'active';
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
    public function deleteMember($payload){
    	// body
    	$member = Team::find($payload->member_id);
    	if($member !== null){
    		if($member->delete()){
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
        $all_teams = Team::orderBy('created_at', 'ASC')->get();
        if(count($all_teams) > 0){
            $team_box = [];
            foreach ($all_teams as $tl) {
                if(!is_numeric($tl->position)){
                    $tl->position = 0;
                }
                $setup = Setup::where("id", $tl->position)->first();
                $tl->position = $setup->designation ?? 'none';

                $data = [
                    'id'            => $tl->id,
                    'firstname'     => $tl->firstname,
                    'lastname'      => $tl->lastname,
                    'position'      => $tl->position,
                    'email'         => $tl->email,
                    'sub_description' => str_limit($tl->description, $limit = 100, $end = '...'),
                    'description'   => str_replace(". He", ".<br /><br /> He", $tl->description),
                    'avatar'        => $tl->avatar,
                    'status'        => $tl->status,
                ];

                array_push($team_box, $data);
            }
        }else{
            $team_box = [];
        }

        // return
        return $team_box;
    }

    /*
    |-----------------------------------------
    | GET ALL TEAM
    |-----------------------------------------
    */
    public function getAllTeamByGroup(){
        // body
        $all_teams = Team::where('status', 'active')->orderBy('created_at', 'ASC')->get();
        if(count($all_teams) > 0){
            $team_box = [];
            foreach ($all_teams as $tl) {
                $setup = Setup::where("id", $tl->position)->first();
                $tl->position = $setup->designation ?? 'none';

                $data = [
                    'id'            => $tl->id,
                    'firstname'     => $tl->firstname,
                    'lastname'      => $tl->lastname,
                    'position'      => $tl->position,
                    'email'         => $tl->email,
                    'sub_description' => str_limit($tl->description, $limit = 100, $end = '...'),
                    'description'   => str_replace(". He", ".<br /><br /> He", $tl->description),
                    'avatar'        => $tl->avatar,
                    'status'        => $tl->status,
                ];


                array_push($team_box, $data);
            }
        }else{
            $team_box = [];
        }

        // return
        return $team_box;
    }

    /*
    |---------------------------------------------
    | GET ONE MEMBER
    |---------------------------------------------
    */
    public function getOneMember($payload){
        // body
        $team = Team::where("id", $payload->member_id)->first();
        if($team !== null){
            $data = [
                'id'            => $team->id,
                'firstname'     => $team->firstname,
                'lastname'      => $team->lastname,
                'position'      => $team->position,
                'email'         => $team->email,
                'sub_description' => str_limit($team->description, $limit = 100, $end = '...'),
                'description'   => str_replace(". He", ".<br /><br /> He", $team->description),
                'avatar'        => $team->avatar,
                'status'        => $team->status,
            ];
        }else{
            $data = [];
        }

        // return
        return $data;
    }
}
