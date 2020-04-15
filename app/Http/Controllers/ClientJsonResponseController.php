<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\NewsHeadline;
use Cavidel\ClientSubscription;
use Cavidel\SiteContact;
use Cavidel\SiteVisitor;
use Cavidel\Mail\NewApplicationMail;
use Cavidel\Team;
use Cavidel\Order;
use Cavidel\Product;
use Mail;

class ClientJsonResponseController extends Controller
{
    /*
    |---------------------------------------------
    | SHOW LATEST NEWS HEADLINES
    |---------------------------------------------
    */
    public function loadNews(){
    	$news = new NewsHeadline();
    	$data = $news->displayNewsHeadlines();

    	// return response
    	return response()->json($data);
    }

    /*
    |---------------------------------------------
    | SUBSCRIBE CLIENT EMAIL
    |---------------------------------------------
    */
    public function subscribeEmail(Request $request){
        $subscription   = new ClientSubscription();
        $data           = $subscription->subscribeMail($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | CONTACT SUPPORT
    |---------------------------------------------
    */
    public function contactSupport(Request $request){
        $contact   = new SiteContact();
        $data      = $contact->contactUs($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | NEW SITE VISITOR
    |---------------------------------------------
    */
    public function newSiteVisitor(Request $request){
        $site_visitor   = new SiteVisitor();
        $data           = $site_visitor->addVisitor($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | SEND APPLICATION LETTER
    |---------------------------------------------
    */
    public function applicationLetter(Request $request){
        $firstname      = $request->firstname;
        $lastname       = $request->lastname;
        $email          = $request->email;
        $mobile         = $request->mobile;
        $description    = $request->description;
        $address        = $request->address;
        $gender         = $request->gender;
        $age_range      = $request->age_range;
        $work_experience = $request->work_experience;
        $skills         = $request->skills;
        $competency     = $request->competency;
        $job_title      = $request->job_title;

        $letter         = $this->convertBase64ToFile($request->letter_base64, 'uploads', $firstname, $lastname);
        $resume         = $this->convertBase64ToFile($request->resume_base64, 'uploads', $firstname, $lastname);

        $path_to_letter = public_path('uploads').'/'.$letter;
        $path_to_resume = public_path('uploads').'/'.$resume;

        $mail_data = [
            'firstname'   => $firstname,
            'lastname'    => $lastname,
            'email'       => $email,
            'mobile'      => $mobile,
            'description' => $description,
            'address'     => $address,
            'letter'      => $path_to_letter,
            'resume'      => $path_to_resume,
            'gender'        => $gender,
            'age_range'     => $age_range,
            'work_experience' => $work_experience,
            'skills'        => $skills,
            'competency'    => $competency,
            'job_title'     => $job_title
        ];

        try {
            if(env("APP_ENV") == "local"){
                $endpoint = env("API_LOCAL_URL")."/register/applicants";
            }else{
                $endpoint = env("API_LIVE_URL")."/register/applicants";
            }
            // 
            $endpoint = "https://cavidel.officemate.ng/api/register/applicants";
            $query = array(
                "InterviewCategoryID" => $request->job_title,
                "Name"          => $request->firstname." ".$request->lastname,
                "PhoneNumber"   => $request->mobile,
                "EmailAddress"  => $request->email,
                "CVfile"        => $request->resume_base64,
                "Gender"        => $request->gender,
                "AgeRange"      => $request->age_range,
                "WorkExperience"=> $request->work_experience,
                "Skills"        => $request->skills,
                "Competency"    => $request->competency,
            );

            // dd($query);
            return $query;

            $headers  = array('Content-Type: application/json');

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query)); //Post Fields
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            // close the connection
            curl_close($ch);
        } catch (Exception $e) {
            $data   = $e->getMessage();
        }

        // save cv to officemate 
        Mail::to('consultant@cavidel.com')->send(new NewApplicationMail($mail_data));
        $data = [
            'status'    => 'success',
            'message'   => 'We have received your mail, we will get back to you as soon as possible.'
        ];

        // return response.
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | GET TEAM MEMERS
    |---------------------------------------------
    */
    public function getTeamMembers(){
        // body
        $team = new Team();
        $data = $team->getAllTeamByGroup();

        // return response.
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | PLACE NEW ORDER
    |-----------------------------------------
    */
    public function placeNewOrder(Request $request){
        // body
        $team = new Order();
        $data = $team->placeOrder($request);

        // return response.
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | FETCH CAVIDEL PRODUCTS
    |-----------------------------------------
    */
    public function fetchProducts(Request $request){
        // body
        $all_products = new Product();
        $data         = $all_products->getAllProducts();

        // return response.
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | CLEAR MAIL QUEUE
    |-----------------------------------------
    */
    public function clearQueue(Request $request){
        // body
        $site_contact = new SiteContact();
        $data         = $site_contact->clearQueueMails();

        // return response.
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | DONWLOAD IMAGE TO JPG
    |-----------------------------------------
    */
    public function convertBase64ToFile($base64_string, $destination, $firstname, $lastname){
        $firstname  = strtolower($firstname);
        $lastname   = strtolower($lastname);

        $time   = time().rand(000,999);
        if(!empty($base64_string)){
            $file_path = public_path($destination);
            $file_data = str_replace("data:application/pdf;base64,", "", $base64_string);
            $file_data = str_replace(" ", "+", $file_data); // filtered strings
            $file_name = $file_path.'/'.$firstname.'-'.$lastname.'-'.$time.'.pdf'; //generating unique file name; 
            $image_data = base64_decode($file_data);
            if(file_put_contents($file_name, $image_data)){
                $new_image_name = $firstname.'-'.$lastname.'-'.$time.'.pdf';
                return $new_image_name;
            }else{
                return null;
            }
        }
    }

    /*
    |-----------------------------------------
    | GET JOB PLACEMENT
    |-----------------------------------------
    */
    public function getJobPlacements(Request $request){
        // body
        try {

            if(env("APP_ENV") == "local"){
                $endpoint = env("API_LOCAL_URL")."/all/job/placement";
            }else{
                $endpoint = env("API_LIVE_URL")."/all/job/placement";
            }

            $headers  = array('Content-Type: application/json');
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            // return
            $data = json_decode($res, true);

            // close the connection
            curl_close($ch);
        } catch (Exception $e) {
            $data   = $e->getMessage();
        }

        // return response.
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | GET JOB PLACEMENT
    |-----------------------------------------
    */
    public function getJobPlacementByRef(Request $request, $id){
        // body
        try {

            if(env("APP_ENV") == "local"){
                $endpoint = env("API_LOCAL_URL")."/one/job/placement/".$id;
            }else{
                $endpoint = env("API_LIVE_URL")."/one/job/placement/".$id;
            }

            $headers  = array('Content-Type: application/json');
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            // return
            $data = json_decode($res, true);

            // close the connection
            curl_close($ch);
        } catch (Exception $e) {
            $data   = $e->getMessage();
        }

        // return response.
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | GET JOB PLACEMENT
    |-----------------------------------------
    */
    public function getJobPlacementsTypes(Request $request){
        // body
        try {
            if(env("APP_ENV") == "local"){
                $endpoint = env("API_LOCAL_URL")."/interview/category";
            }else{
                $endpoint = env("API_LIVE_URL")."/interview/category";
            }

            $headers  = array('Content-Type: application/json');
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);

            // return
            $data = json_decode($res, true);

            // close the connection
            curl_close($ch);
        } catch (Exception $e) {
            $data   = $e->getMessage();
        }

        // return response.
        return response()->json($data);
    }
}
