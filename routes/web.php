<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


/*
|---------------------------------------------------------------------------------------------------------
| LOAD GLOBAL NEWS
|---------------------------------------------------------------------------------------------------------
|
*/
Route::get('/load/global/news', 			'ClientJsonResponseController@loadNews')->name('global_news');
Route::post('/client/subscribe/email',		'ClientJsonResponseController@subscribeEmail')->name('subscribe');
Route::post('/client/contact/support',		'ClientJsonResponseController@contactSupport')->name('contact_us');
Route::post('/new/site/visitor',			'ClientJsonResponseController@newSiteVisitor')->name('new_visitor');

