<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\SoftwareIssue;
use Cavidel\Component;
use Cavidel\Project;
use Cavidel\SiteVisitor;
use Cavidel\Setup;

class AdminJsonResponseController extends Controller
{
    /*
    |---------------------------------------------
    | LOAD ALL SOFTWARE ISSUES
    |---------------------------------------------
    */
    public function loadIssues(){
    	$software_issues 	= new SoftwareIssue();
    	$data 				= $software_issues->loadAllIssues();

    	// return response
    	return response()->json($data);
    }


    /*
    |-----------------------------------------
    | COUNT ISSUES
    |-----------------------------------------
    */
    public function countIssues(){
        // body
        $software_issues    = new SoftwareIssue();
        $data               = $software_issues->countAllSoftwareIssues();

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | ADD NEW PROJECT
    |---------------------------------------------
    */
    public function addNewProject(Request $request){
        $new_project    = new Project();
        $data           = $new_project->addNewProject($request);

        // return response
        return response()->json($data);
    }


    /*
    |---------------------------------------------
    | LOAD ALL PROJECT
    |---------------------------------------------
    */
    public function loadProject(Request $request){
        $new_project    = new Project();
        $data           = $new_project->allProjects($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | LOAD ALL PROJECT
    |---------------------------------------------
    */
    public function loadOneProject($id){
        $new_project    = new Project();
        $data           = $new_project->getOneProject($id);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | ADD COMPONENT
    |---------------------------------------------
    */
    public function addNewComponent(Request $request){
        $component  = new Component();
        $data       = $component->addNewCompoent($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | GET COMPONENT
    |---------------------------------------------
    */
    public function getAllComponent(Request $request){
        $component  = new Component();
        $data       = $component->getAllComponent($request);

        // return response
        return response()->json($data);
    }


    /*
    |---------------------------------------------
    | SHOW ALL PAGES
    |---------------------------------------------
    */
    public function showAllPages(){
        $component  = new Component();
        $data       = $component->allPages();

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | GET SINGLE PAGE WITH ALL COMPONENTS
    |---------------------------------------------
    */
    public function pageComponent($page){
        $component  = new Component();
        $data       = $component->getPageComponent($page);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | GET COMPONENT CONTENTS
    |---------------------------------------------
    */
    public function componentChild($id){
        $component  = new Component();
        $data       = $component->getContents($id);

        // return response
        return response()->json($data);
    }


    /*
    |-----------------------------------------
    | GET SITE VISITORS
    |-----------------------------------------
    */
    public function getVisitorsCount(){
        // body
        $site_visitor   = new SiteVisitor();
        $data           = $site_visitor->totalVisitor();
        
        // return response.
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | UNLOCK PROJECT
    |---------------------------------------------
    */
    public function unlockProject(Request $request){
        // body
        $project    = new Project();
        $data       = $project->unlockProjectSubscription($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | LOCK PROJECT
    |---------------------------------------------
    */
    public function lockProject(Request $request){
        // body
        $project    = new Project();
        $data       = $project->lockProjectSubscription($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | ADD DESIGNATION
    |---------------------------------------------
    */
    public function addNewDesignation(Request $request){
        // body
        $setup  = new Setup();
        $data   = $setup->addDesignation($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | ADD DESIGNATION
    |---------------------------------------------
    */
    public function getAllDesignation(Request $request){
        // body
        $setup  = new Setup();
        $data   = $setup->getDesignation($request);

        // return response
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | UPDATE DESIGNATION
    |-----------------------------------------
    */
    public function updateDesignation(Request $request){
        // body
        $setup  = new Setup();
        $data   = $setup->updateOneDesignation($request);

        // return response
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | GET ONE DESINGATION
    |-----------------------------------------
    */
    public function getOneDesignation(Request $request){
        // body
        $setup  = new Setup();
        $data   = $setup->getOneDesignation($request);

        // return response
        return response()->json($data);
    }
}
