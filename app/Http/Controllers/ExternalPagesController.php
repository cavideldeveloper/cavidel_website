<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\Team;
use Cavidel\Post;
use illuminate\Support\Facades\Http;

class ExternalPagesController extends Controller
{

	/*
	|---------------------------------------------
	| SHOW INDEX (ENTRY POINT)
	|---------------------------------------------
	*/
	public function index(){
		return view('index');
	}

    /*
    |---------------------------------------------
    | SHOW ABOUT US
    |---------------------------------------------
    */
    public function about(){
    	return view('pages.about');
    }

    /*
    |---------------------------------------------
    | SHOW TEAM
    |---------------------------------------------
    */
    public function team(){
        $team = new Team();
        $data = $team->getAllTeamByGroup();

    	return view('pages.team', compact('team'));
    }

    /*
    |---------------------------------------------
    | SHOW PORTFOLIO
    |---------------------------------------------
    */
    public function portfolio(){
    	return view('pages.portfolio');
    }

    /*
    |---------------------------------------------
    | SHOW PROJECTS
    |---------------------------------------------
    */
    public function projects(){
    	return view('pages.projects');
    }

    /*
    |---------------------------------------------
    | SHOW PRODUCT
    |---------------------------------------------
    */
    public function products(){
        return view('pages.products');
    }

    /*
    |-----------------------------------------
    | SHOW OFFICE AUTOMATION
    |-----------------------------------------
    */
    public function officeAutomation(){
        // body
        return view('pages.office-automation');
    }

    /*
    |-----------------------------------------
    | SHOW WEB DEVELOPMENT
    |-----------------------------------------
    */
    public function webDevelopment(){
        // body
        return view('pages.web-development');
    }

    /*
    |-----------------------------------------
    | SHOW MOBILE DEVELOPMENT
    |-----------------------------------------
    */
    public function mobileDevelopment(){
        // body
        return view('pages.mobile-development');
    }

    /*
    |-----------------------------------------
    | SHOW PAYMENT INTEGRATION
    |-----------------------------------------
    */
    public function paymentIntegration(){
        // body
        return view('pages.payment-integration');
    }

    /*
    |---------------------------------------------
    | SHOW OFFICEMATE
    |---------------------------------------------
    */
    public function officemate(){
        return view('pages.officemate');
    }

    /*
    |---------------------------------------------
    | SHOW CATSS
    |---------------------------------------------
    */
    public function catss(){
        return view('pages.catss');
    }

    /*
    |---------------------------------------------
    | SHOW TIMS
    |---------------------------------------------
    */
    public function tims(){
        return view('pages.tims');
    }

    /*
    |---------------------------------------------
    | SHOW SOLUTIONS
    |---------------------------------------------
    */
    public function solutions(){
        return view('pages.solutions');
    }

    /*
    |---------------------------------------------
    | SHOW PROCESS
    |---------------------------------------------
    */
    public function process(){
        return view('pages.process');
    }

    /*
    |---------------------------------------------
    | SHOW BLOG
    |---------------------------------------------
    */
    public function blog(){
        return view('pages.blog');
    }

    /*
    |---------------------------------------------
    | SHOW BLOG POST
    |---------------------------------------------
    */
    public function blogPost(Request $request, $id) {
        // dd($id);
        $post_id = $id;
        // dd($post);
        return view('pages.blog-post')->with('post_id', $post_id);
    }
    /*
    |---------------------------------------------
    | SHOW CONTACT US
    |---------------------------------------------
    */
    public function contact(){
    	return view('pages.contact');
    }

    /*
    |---------------------------------------------
    | CAREER
    |---------------------------------------------
    */
    public function career(){
        return view('pages.career');
    }

    /*
    |---------------------------------------------
    | SHOW EVENT
    |---------------------------------------------
    */
    public function services(){
        return view('pages.services');
    }

    /*
    |---------------------------------------------
    | SHOW EVENT
    |---------------------------------------------
    */
    public function faq(){
        return view('pages.faq');
    }

    /*
    |---------------------------------------------
    | SHOW EVENT
    |---------------------------------------------
    */
    public function corporate(){
        return view('pages.corporate');
    }

    /*
    |-----------------------------------------
    | SOFTWARE DEVELOPMENT
    |-----------------------------------------
    */
    public function softwareDevelopment(){
        // body
        return view('pages.software-development');
    }

    /*
    |-----------------------------------------
    | BUSINESS PROCESS
    |-----------------------------------------
    */
    public function businessProcess(Request $request){
        // body
        return view('pages.business-process');
    }

    /*
    |-----------------------------------------
    | TECHNOLOGY
    |-----------------------------------------
    */
    public function technology(Request $request){
        // body
        return view('pages.technology');
    }

    /*
    |-----------------------------------------
    | CONSULTING
    |-----------------------------------------
    */
    public function consulting(Request $request){
        // body
        return view('pages.consulting');
    }

    /*
    |-----------------------------------------
    | CONSULTING
    |-----------------------------------------
    */
    public function finTech(Request $request){
        // body
        return view('pages.fin-tech');
    }

    /*
    |-----------------------------------------
    | CONSULTING
    |-----------------------------------------
    */
    public function mediTech(Request $request){
        // body
        return view('pages.medi-tech');
    }

    /*
    |-----------------------------------------
    | CONSULTING
    |-----------------------------------------
    */
    public function agroTech(Request $request){
        // body
        return view('pages.agro-tech');
    }

    /*
    |-----------------------------------------
    | CONSULTING
    |-----------------------------------------
    */
    public function learningTech(Request $request){
        // body
        return view('pages.learning-tech');
    }

    /*
    |-----------------------------------------
    | SHOW ALL POSTS
    |-----------------------------------------
    */
    public function getAllPosts(Request $request){
    	// body
    	$posts 	= new Post();
    	$data 			= $posts->getAllPosts($request);

        // to collection
        // $all_subscribers    = $all_users['data'] ?? [];

        // return view('officemate_admin.index', compact('all_subscribers'));
        //return response
        return response()->json($data, 200);
    }

    /*
    |-----------------------------------------
    | SHOW ALL POSTS BY VIEWS
    |-----------------------------------------
    */
    public function getAllPostsByViews(Request $request){
    	// body
    	$posts 	= new Post();
    	$data 			= $posts->getAllPostsByViews($request);

        // to collection
        // $all_subscribers    = $all_users['data'] ?? [];

        // return view('officemate_admin.index', compact('all_subscribers'));
        //return response
        return response()->json($data, 200);
    }

    /*
    |-----------------------------------------
    | SHOW ALL POSTS BY CATEGORY
    |-----------------------------------------
    */
    public function getAllCategoryPosts(Request $request, $category_id){
        // body
        $request->id = $category_id;
    	$posts 	= new Post();
    	$data 			= $posts->getAllCategoryPosts($request);

        // to collection
        // $all_subscribers    = $all_users['data'] ?? [];

        // return view('officemate_admin.index', compact('all_subscribers'));
        //return response
        return response()->json($data, 200);
    }

     /*
    |-----------------------------------------
    | SHOW ONE POST
    |-----------------------------------------
    */
    public function getOnePost(Request $request, $post_id){
        // body
        $request->id = $post_id;
    	$post 	= new Post();
    	$data 			= $post->getOnePost($request);

        // to collection
        // $all_subscribers    = $all_users['data'] ?? [];

        // return view('officemate_admin.index', compact('all_subscribers'));
        //return response
        return response()->json($data, 200);
    }

     /*
    |-----------------------------------------
    | UDATE VIEWS OF ONE POST
    |-----------------------------------------
    */
    public function updateViews(Request $request, $post_id){
        // body
        $request->id = $post_id;
    	$post 	= new Post();
    	$data 			= $post->updateViews($request);

        //return response
        return response()->json($data, 200);
    }


    /*
    |-----------------------------------------
    | SHOW ALL COMMENTS BY POST
    |-----------------------------------------
    */
    public function getAllPostComments(Request $request, $post_id){
        // body
        $request->id = $post_id;
    	$posts 	= new Post();
    	$data 			= $posts->getAllPostComments($request);

        // to collection
        // $all_subscribers    = $all_users['data'] ?? [];

        // return view('officemate_admin.index', compact('all_subscribers'));
        //return response
        return response()->json($data, 200);
    }


    /*
    |-----------------------------------------
    | POST COMMENTS
    |-----------------------------------------
    */
    public function postComment(Request $request) {

        $comment    = new Post();
        $data       = $comment->postComment($request);

        // return response
        return response()->json($data, 200);

        // $data = Http::post('http://127.0.0.1:8334/api/save/comment', [
        //     'fullName' => $request->fullName,
        //     'emailAddress' => $request->emailAddress,
        //     'comment' => $request->comment,
        //     'postId' => $request->postId,
        // ]);

        // return response()->json($data, 200);
    }

     /*
    |-----------------------------------------
    | MAKE REQUEST
    |-----------------------------------------
    */
    public function makeRequest(Request $request) {
        // body
        // return response()->json($request->all());
        try {
            $headers = array(
                'content-type: application/json',
                "x-access-token: yc3ROYW1lIjoiQnJldHQiLCJsYXN0TmFtZSI6Ikxhd3NvbiIsInBob25lTnVtYmVyIjoiNTIxMzM4MTQwOCIsInVybCI6InRlam",
            );

            $makeRequest = array(
                'fullname' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'businessname' => $request->businessname,
                'businessnature' => $request->businessnature,
                'staffnum' => $request->staffnum,
                'clientnum' => $request->clientnum,
                'feature' => $request->feature,
            );
            // $post_id = $payload->id;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://cavidel.officemate.ng/api/make/request");
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($makeRequest));
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
