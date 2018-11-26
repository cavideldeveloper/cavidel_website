<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\NewsHeadline;
use Cavidel\ClientSubscription;
use Cavidel\SiteContact;
use Cavidel\SiteVisitor;
use Cavidel\Mail\NewApplicationMail;
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
        $letter         = $request->file('letter');
        $resume         = $request->file('resume');

        $letter_ext    = $letter->getClientOriginalExtension();
        $resume_ext    = $letter->getClientOriginalExtension();
        if($letter_ext !== 'pdf' && $resume_ext !== 'pdf'){
            $msg = 'Invalid file format, all file format must be pdf';
            return redirect()->back()->with('error', $msg);
        }else{
            $new_letter_name = ucwords($firstname).' '.ucwords($lastname).' Letter.'.$letter_ext;
            $new_resume_name = ucwords($firstname).' '.ucwords($lastname).' Resume.'.$resume_ext;
            // return $path;

            //Move Uploaded File
            $destinationPath = 'uploads';
            $letter->move($destinationPath, $new_letter_name);
            $resume->move($destinationPath, $new_resume_name);

            $path_to_letter = public_path('uploads').'/'.$new_letter_name;
            $path_to_resume = public_path('uploads').'/'.$new_resume_name;

            $mail_data = [
                'firstname'   => $firstname,
                'lastname'    => $lastname,
                'email'       => $email,
                'mobile'      => $mobile,
                'description' => $description,
                'address'     => $address,
                'letter'      => $path_to_letter,
                'resume'      => $path_to_resume,
            ];

            Mail::to('support@cavidel.com')->send(new NewApplicationMail($mail_data));
            $msg = 'We have received your mail, we will get back to you as soon as possible.';
            return redirect()->back()->with('success', $msg);
        }
    }

}
