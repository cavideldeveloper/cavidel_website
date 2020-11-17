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
            $this->endpoint = "http://127.0.0.1:8334/api";
            // $this->endpoint = "https://accounting.officemate.ng/api";
        }elseif(env('APP_ENV') == "production"){
            $this->endpoint = "https://cavidel.officemate.ng/api";
        }
    }

    /*
    |-----------------------------------------
    | Get all posts
    |-----------------------------------------
    */
    public function getAllPosts($payload){
    	// body
        try {
            $headers = array(
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://cavidel.officemate.ng/api/blog/posts");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            $data = collect(json_decode($res, true));
            // dd($data);
        } catch (Exception $e) {
            $data = collect([]);
        }

        return $data;
    }

    /*
    |-----------------------------------------
    | Get posts by category
    |-----------------------------------------
    */
    public function getAllCategoryPosts($payload){
    	// body
        try {
            $headers = array(
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );
            $category_id = $payload->id;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://cavidel.officemate.ng/api/blog/posts/category/$category_id");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            $data = collect(json_decode($res, true));
            // dd($data);
        } catch (Exception $e) {
            $data = collect([]);
        }

        return $data;
    }

    /*
    |-----------------------------------------
    | Get posts by views count
    |-----------------------------------------
    */
    public function getAllPostsByViews($payload){
    	// body
        try {
            $headers = array(
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );
            // $category_id = $payload->id;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://cavidel.officemate.ng/api/blog/post/by/views");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            $data = collect(json_decode($res, true));
            // dd($data);
        } catch (Exception $e) {
            $data = collect([]);
        }

        return $data;
    }

    /*
    |-----------------------------------------
    | Get one post
    |-----------------------------------------
    */
    public function getOnePost($payload){
    	// body
        try {
            $headers = array(
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );
            $post_id = $payload->id;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://cavidel.officemate.ng/api/blog/post/$post_id");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            $data = collect(json_decode($res, true));
            // dd($data);
        } catch (Exception $e) {
            $data = collect([]);
        }

        return $data;
    }


    /*
    |-----------------------------------------
    | Update views of one post
    |-----------------------------------------
    */
    public function updateViews($payload){
    	// body
        try {
            $headers = array(
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );
            $post_id = $payload->id;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://cavidel.officemate.ng/api/update/post/views/$post_id");
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            $data = collect(json_decode($res, true));
            // dd($data);
        } catch (Exception $e) {
            $data = collect([]);
        }

        return $data;
    }


    /*
    |-----------------------------------------
    | Update views of one post
    |-----------------------------------------
    */
    public function postComment($payload){
    	// body
        try {
            $headers = array(
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );

            $postRequest = array(
                'fullName' => $payload->fullName,
                'emailAddress' => $payload->emailAddress,
                'comment' => $payload->comment,
                'postId' => $payload->postId,
            );
            // $post_id = $payload->id;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://cavidel.officemate.ng/api/save/comment");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postRequest);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            $data = collect(json_decode($res, true));
            // dd($data);
        } catch (Exception $e) {
            $data = collect([]);
        }

        return $data;
    }


    /*
    |-----------------------------------------
    | Get comments by post
    |-----------------------------------------
    */
    public function getAllPostComments($payload){
    	// body
        try {
            $headers = array(
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );
            $post_id = $payload->id;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://cavidel.officemate.ng/api/fetch/post/$post_id/comments");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            $data = collect(json_decode($res, true));
            // dd($data);
        } catch (Exception $e) {
            $data = collect([]);
        }

        return $data;
    }
}
