<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\Admin;
use Auth;

class AdminAuthenticationController extends Controller
{
    /*
    |---------------------------------------------
    | SHOW AUTHENTICATION FORM
    |---------------------------------------------
    */
    public function showLogin(){
    	// check and create default admin
    	$this->createDefaultAdmin();

    	return view('__auth.login');
    }

    /*
    |-----------------------------------------
    | PROCCESS ADMIN LOGIN
    |-----------------------------------------
    */
    public function doLogin(Request $request){
        // ajax data
        $username = $request->username;
        $password = $request->password;

        // remember token
        $rememberToken = $request->remember;

        // check auth for Admin login Guard
        if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password], $rememberToken)) {
            // if successful 
            $data = [
                'status'  => 'success',
                'message' => 'Login Successful !'
            ];

            // return response
            return response()->json($data);

        } else {
             // if successful 
            $data = [
                'status'  => 'error',
                'message' => 'Login Fail !'
            ];

            // return response
            return response()->json($data);
        }
    }


    /*
    |-----------------------------------------
    | INITIALIZE ADMIN DEFAULT LOGIN
    |-----------------------------------------
    */
    public function createDefaultAdmin(){
    	// body
    	// check if admin already exits
        $check_admin = Admin::find(1);
        if($check_admin == null){
            // create new admin
            $level = "Alpha";
            $email = "admin@cavidel.com";
            $password = bcrypt('welcome2cavidel12345');

            $create_admin           = new Admin();
            $create_admin->level    = $level;
            $create_admin->email    = $email;
            $create_admin->password = $password;
            $create_admin->save();
        }

        // return 
        return true;
    }
}
