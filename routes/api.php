<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('report/issue', 				'IssueReportController@reportIssue');
Route::post('verify/key',					'IssueReportController@verifyKey');
Route::post('verify/software',				'IssueReportController@verifySoftwareKey');



// handle slack message controller
Route::post('receive/slack/message', 	'HandleSlackMessageController@showMessage');