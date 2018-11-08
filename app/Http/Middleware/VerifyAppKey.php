<?php

namespace Cavidel\Http\Middleware;

use Closure;
use Cavidel\Project;

class VerifyAppKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->verifyApplicationKey($request)){
           return $next($request); 
        }else{
            $data = [
                'status'    => 'error',
                'message'   => 'Invalid software key!',
            ];

            // return response
            return response()->json($data, 401);
        }
    }

    /*
    |---------------------------------------------
    | VERIFY APPLICATION KEY
    |---------------------------------------------
    */
    public function verifyApplicationKey($request){
        $software_key = $request->software_key;

        // check if valid
        $check_project = Project::where('app_key', $software_key)->first();
        if($check_project !== null){
            return true;
        }else{
            return false;
        }
    }
}
