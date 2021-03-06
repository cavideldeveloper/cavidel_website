<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;
use Cavidel\Documentation;
use Carbon\Carbon;

class Project extends Model
{
    /*
    |-----------------------------------------
    | ADD NEW PROJECT
    |-----------------------------------------
    */
    public function addNewProject($payload){

    	$days_default = 90;

    	$api_key 		        = "C-".rand(000, 999).rand(000, 999).rand(000, 999);
    	$payload->status 		= "active";
    	$payload->duration 		= Carbon::now()->addDays($days_default);
    	$payload->last_update 	= "none";
    	$payload->project_stage = "development";

    	// body
    	$new_project 				= new Project();
    	$new_project->name 			= $payload->name;
    	$new_project->sector 		= $payload->sector;
    	$new_project->client 		= $payload->clients;
    	$new_project->company 		= $payload->company;
    	$new_project->app_key 		= $api_key;
    	$new_project->status 		= $payload->status;
    	$new_project->duration 		= $payload->duration;
		$new_project->last_update 	= $payload->last_update;
		$new_project->project_stage = $payload->project_stage;
    	if($new_project->save()){
    		$data = [
    			'status' 	=> 'success',
    			'message' 	=> $payload->name.' added successfully !'
    		];
    	}else{
    		$data = [
    			'status' 	=> 'error',
    			'message' 	=> 'Failed to add new project!'
    		];
    	}

    	// return
    	return $data;
    }

    /*
    |-----------------------------------------
    | GET ALL PROJECTS
    |-----------------------------------------
    */
    public function allProjects(){
    	// body
    	$projects = Project::orderBy("id", "DESC")->get();

    	// return
    	return $projects;
    }

    /*
    |-----------------------------------------
    | GET ONE PROJECT
    |-----------------------------------------
    */
    public function getOneProject($id){
    	// body
    	$project 	= Project::where("id", $id)->first();
    	$docs 		= Documentation::getDocs($id);

    	$data = [
    		'project' 	=> $project,
    		'docs' 		=> $docs
    	];

    	// return
    	return $data;
    }

    /*
    |---------------------------------------------
    | LOCK PROJECT SUBSCRIPTION
    |---------------------------------------------
    */
    public function unlockProjectSubscription($payload){
        $project = Project::find($payload->project_id);
        if($project !== null){
            $project->status = 'active';
            if($project->update()){
                $data = [
                    'status'    => 'success',
                    'message'   => 'Project unlock!',
                ];
            }else{
                $data = [
                    'status'    => 'error',
                    'message'   => 'Failed to unlock!',
                ];
            }
        }else{
            $data = [
                'status'    => 'error',
                'message'   => 'Could not find project',
            ];
        }

        // return 
        return $data;
    }

    /*
    |---------------------------------------------
    | LOCK PROJECT SUBSCRIPTION
    |---------------------------------------------
    */
    public function lockProjectSubscription($payload){
        $project = Project::find($payload->project_id);
        if($project !== null){
            $project->status = 'inactive';
            if($project->update()){
                $data = [
                    'status'    => 'success',
                    'message'   => 'Project locked!',
                ];
            }else{
                $data = [
                    'status'    => 'error',
                    'message'   => 'Failed to lock!',
                ];
            }
        }else{
            $data = [
                'status' => 'error',
                'message' => 'Could not find project',
            ];
        }

        // return 
        return $data;
    }

}
