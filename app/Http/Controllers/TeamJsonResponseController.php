<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\Team;

class TeamJsonResponseController extends Controller
{
    /*
    |-----------------------------------------
    | ADD NEW TEAM MEMBER
    |-----------------------------------------
    */
    public function store(Request $request){
    	// body
    	$team = new Team();
    	$data = $team->addNewMemeber($request);

    	// return response.
    	return response()->json($data);
    }

    /*
    |-----------------------------------------
    | ADD NEW TEAM MEMBER
    |-----------------------------------------
    */
    public function update(Request $request){
    	// body
    	$team = new Team();
    	$data = $team->updateMemberInfo($request);

    	// return response.
    	return response()->json($data);
    }

    /*
    |-----------------------------------------
    | ADD NEW TEAM MEMBER
    |-----------------------------------------
    */
    public function deleteOne(Request $request){
    	// body
    	$team = new Team();
    	$data = $team->deleteMember($request);

    	// return response.
    	return response()->json($data);
    }

    /*
    |-----------------------------------------
    | ADD NEW TEAM MEMBER
    |-----------------------------------------
    */
    public function restore($team_id){
    	// body
    	$team = new Team();
    	$data = $team->restoreMemember($team_id);

    	// return response.
    	return response()->json($data);
    }

    /*
    |-----------------------------------------
    | ADD NEW TEAM MEMBER
    |-----------------------------------------
    */
    public function load(Request $request){
    	// body
    	$team = new Team();
    	$data = $team->getAllTeam($request);

    	// return response.
    	return response()->json($data);
    }


    /*
    |---------------------------------------------
    | LOAD ONE SINGLE MEMBER
    |---------------------------------------------
    */
    public function loadOne(Request $request){
        // body
        $team = new Team();
        $data = $team->getOneMember($request);

        // return response.
        return response()->json($data);
    }
}
