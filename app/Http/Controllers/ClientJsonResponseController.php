<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\NewsHeadline;
use Cavidel\ClientSubscription;
use Cavidel\SiteContact;
use Cavidel\SiteVisitor;

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

}
