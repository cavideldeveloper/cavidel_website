<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $endpoint;

    /*
    |-----------------------------------------
    | ACTIVE ENDPOINT
    |-----------------------------------------
    */
    public function __construct(){
        // body
        if(env('APP_ENV') == "local"){
            $this->endpoint = "http://127.0.0.1:8332/api";
            // $this->endpoint = "https://accounting.officemate.ng/api";
        }elseif(env('APP_ENV') == "production"){
            $this->endpoint = "https://cavidel.officemate.ng/api";
        } 
    }

    /*
    |-----------------------------------------
    | OFFICEMATE ADMIN
    |-----------------------------------------
    */
    public function getAllPosts($payload){
    	// body
        try {
            $headers = array(
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->endpoint."/blog/posts");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            $data = collect(json_decode($res, true));   
        } catch (Exception $e) {
            $data = collect([]);
        }

        return $data;
    }
}
