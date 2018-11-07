<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    /*
    |---------------------------------------------
    | Add New Components
    |---------------------------------------------
    */
    public function addNewCompoent($payload){
    	$component         = new Component();
    	$component->name   = $payload->name;
    	$component->page   = $payload->page;
    	$component->status = "active";
    	if($component->save()){
    		$data = [
    			'status' 	=> 'success',
    			'message' 	=> 'Component has been added successfully!',
    		];
    	}else{
    		$data = [
    			'status' 	=> 'error',
    			'message' 	=> 'Failed to create new component',
    		];
    	}

    	// return
    	return $data;
    }

    /*
    |---------------------------------------------
    | GET ALL COMPONENTS
    |---------------------------------------------
    */
    public function getAllComponent(){
    	
        $all_pages = $this->allPages();
        if(count($all_pages) > 0){
            $total = count($all_pages);
            $compo_box = [];
            for($i = 0; $i < $total; $i++) {
                # code...
                $components = Component::where("page", $all_pages[$i])->get();

                $data = [
                    'page'          => ucfirst($all_pages[$i]),
                    'components'    => $components
                ];

                array_push($compo_box, $data);

            }
        }else{
            $compo_box = [];
        }

    	// return
    	return $compo_box;
    }

    /*
    |---------------------------------------------
    | GET PAGE COMPONENTS
    |---------------------------------------------
    */
    public function getPageComponent($page){
    	$component = Component::where("page", strtolower($page))->get();

    	// return
    	return $component;
    }

    /*
    |---------------------------------------------
    | DELETE COMPONENT
    |---------------------------------------------
    */
    public function deleteComponent($page_id){
    	$component = Component::where("id", $page_id)->first();
    	if($component !== null){
    		$delete_component = Component::find($component->id);
    		if($delete_component->delete()){
    			$data = [
    				'status' 	=> 'success',
    				'message' 	=> 'Deleted!',
    			];
    		}else{
    			$data = [
    				'status' 	=> 'error',
    				'message' 	=> 'Error trying to delete component!',
    			];
    		}
    	}else{
    		$data = [
				'status' 	=> 'error',
				'message' 	=> 'Could not find component component!',
			];
    	}

    	// return
    	return $component;
    }

    /*
    |---------------------------------------------
    | ALL SITE PAGES
    |---------------------------------------------
    */
    public function allPages(){
        $pages = [
            'about',
            'team',
            'faq',
            'services',
            'contact',
            'corperate',
            'portfolio',
            'events',
            'products',
        ];

        // return
        return collect($pages);
    }

    /*
    |---------------------------------------------
    | GET COMPONENT CONTENTS
    |---------------------------------------------
    */
    public function getContents($id){

        // return
        return $data = [];
    }
}
