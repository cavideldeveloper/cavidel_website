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

Route::get('/about',						'ExternalPagesController@about');


/*
|---------------------------------------------------------------------------------------------------------
| ADMIN AUTHENTICATION
|---------------------------------------------------------------------------------------------------------
*/
Route::get('/admin/login',					'AdminAuthenticationController@showLogin');
Route::post('/admin/login',					'AdminAuthenticationController@doLogin');


/*
|---------------------------------------------------------------------------------------------------------
| ADMIN PAGES ROUTES
|---------------------------------------------------------------------------------------------------------
*/
Route::get('/admin/dashboard',				'AdminPagesController@dashboard');
Route::get('/admin/issues',					'AdminPagesController@issues');
Route::get('/admin/projects',				'AdminPagesController@projects');
Route::get('/admin/subscriptions',			'AdminPagesController@subscriptions');
Route::get('/admin/view/project/{id}',		'AdminPagesController@viewProject');
Route::get('/admin/tasks',					'AdminPagesController@tasks');
Route::get('/admin/builder',				'AdminPagesController@cms');

Route::get('admin/view/page/{page}',		'AdminPagesController@viewCmsPage');
Route::get('admin/view/component/{id}',		'AdminPagesController@viewComponent');


/*
|---------------------------------------------------------------------------------------------------------
| ADMIN JSON RESPONSE ROUTES
|---------------------------------------------------------------------------------------------------------
*/
Route::get('/admin/load/software/issues',	'AdminJsonResponseController@loadIssues');
Route::post('/admin/add/project',			'AdminJsonResponseController@addNewProject');
Route::get('/admin/load/projects',			'AdminJsonResponseController@loadProject');
Route::get('/admin/load/single/project/{id}','AdminJsonResponseController@loadOneProject');
Route::get('/admin/count/all/issues',		'AdminJsonResponseController@countIssues');

Route::post('/admin/add/components',		'AdminJsonResponseController@addNewComponent');
Route::get('/admin/all/components',			'AdminJsonResponseController@getAllComponent');
Route::get('/admin/all/pages',				'AdminJsonResponseController@showAllPages');
Route::get('/admin/page/components/{page}',	'AdminJsonResponseController@pageComponent');
Route::get('/admin/load/components/{id}',	'AdminJsonResponseController@componentChild');


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

