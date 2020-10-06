<?php

/*
|------------------------------------------------------------------------
| APPLICATION ENTRY POINT
|------------------------------------------------------------------------
|
*/
Route::get('/',								'ExternalPagesController@index');
Route::get('/about',						'ExternalPagesController@about');
Route::get('/contact',						'ExternalPagesController@contact');
Route::get('/team',							'ExternalPagesController@about');
Route::get('/career',						'ExternalPagesController@career');
Route::get('/services',						'ExternalPagesController@services');
Route::get('/process',						'ExternalPagesController@process');
Route::get('/products',						'ExternalPagesController@products');
Route::get('/tims',							'ExternalPagesController@tims');
Route::get('/catss',						'ExternalPagesController@catss');
Route::get('/officemate',					'ExternalPagesController@officemate');

/*
|------------------------------------------------------------------------
| TIMS CATEGORIZE SECTION ENTRY POINT
|------------------------------------------------------------------------
|
*/
Route::get('medi-tech',						'ExternalPagesController@mediTech');
Route::get('fin-tech',						'ExternalPagesController@finTech');
Route::get('agro-tech',						'ExternalPagesController@agroTech');
Route::get('learning-tech',					'ExternalPagesController@learningTech');

Route::get('/officemate-automation',		'ExternalPagesController@officeAutomation');
Route::get('/web-development',				'ExternalPagesController@webDevelopment');
Route::get('/mobile-development',			'ExternalPagesController@mobileDevelopment');
Route::get('/payment-integration',			'ExternalPagesController@paymentIntegration');

Route::get('/solutions',					'ExternalPagesController@solutions');
Route::get('/blog',							'ExternalPagesController@blog');
Route::get('/{id}',               'ExternalPagesController@blogPost');
Route::get('/get/all/posts',       'ExternalPagesController@getAllPosts');
Route::get('/get/all/posts/by/views',       'ExternalPagesController@getAllPostsByViews');
Route::get('/get/all/category/posts/{category_id}',       'ExternalPagesController@getAllCategoryPosts');

Route::get('/faq',							'ExternalPagesController@faq');
Route::get('/portfolio',					'ExternalPagesController@portfolio');


Route::get('/software-development',			'ExternalPagesController@softwareDevelopment');
Route::get('/business-process',				'ExternalPagesController@businessProcess');
Route::get('/technology',					'ExternalPagesController@technology');
Route::get('/consulting',					'ExternalPagesController@consulting');


/*
|---------------------------------------------------------------------------------------------------------
| LIVE CHAT ENTRY POINT
|---------------------------------------------------------------------------------------------------------
|
*/
Route::post('/send-chat/message',	 		'LiveChatController@sendMessageToSlack');
Route::post('/send-chat/request',			'LiveChatController@requestChat');



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
Route::get('admin/view/designation',		'AdminPagesController@viewDesignation');
Route::get('admin/products',				'AdminPagesController@products');
Route::get('admin/messages',				'AdminPagesController@messages');


/*
|---------------------------------------------------------------------------------------------------------
| ADMIN JSON RESPONSE ROUTES
|---------------------------------------------------------------------------------------------------------
*/
Route::get('/admin/load/software/issues',	'AdminJsonResponseController@loadIssues');
Route::post('/admin/add/projects',			'AdminJsonResponseController@addNewProject');
Route::get('/admin/load/projects',			'AdminJsonResponseController@loadProject');
Route::get('/admin/load/single/project/{id}','AdminJsonResponseController@loadOneProject');
Route::get('/admin/count/all/issues',		'AdminJsonResponseController@countIssues');
Route::post('/admin/add/components',		'AdminJsonResponseController@addNewComponent');
Route::get('/admin/all/components',			'AdminJsonResponseController@getAllComponent');
Route::get('/admin/all/pages',				'AdminJsonResponseController@showAllPages');
Route::get('/admin/page/components/{page}',	'AdminJsonResponseController@pageComponent');
Route::get('/admin/load/components/{id}',	'AdminJsonResponseController@componentChild');
Route::get('/admin/get/total/visitor',		'AdminJsonResponseController@getVisitorsCount');

Route::post('/admin/unlock/subscription',	'AdminJsonResponseController@unlockProject');
Route::post('/admin/lock/subscription',		'AdminJsonResponseController@lockProject');

Route::post('/admin/add/designation',		'AdminJsonResponseController@addNewDesignation');
Route::get('/admin/get/designation',		'AdminJsonResponseController@getAllDesignation');
Route::post('/admin/update/designation',	'AdminJsonResponseController@updateDesignation');
Route::get('/admin/get/one/designation',	'AdminJsonResponseController@getOneDesignation');

Route::get('admin/load/products', 			'AdminJsonResponseController@products');
Route::post('add/new/product',				'AdminJsonResponseController@addProduct');

Route::get('get/contact/messages',			'AdminJsonResponseController@getMessages');
Route::get('get/orders/request',			'AdminJsonResponseController@getOrders');

/*
|---------------------------------------------------------------------------------------------------------
| TEAM URI ROUTE CONTROLLER
|---------------------------------------------------------------------------------------------------------
|
*/
Route::post('/admin/create/member',			'TeamJsonResponseController@store');
Route::get('/admin/get/team/members',		'TeamJsonResponseController@load');
Route::get('/admin/get/one/member',			'TeamJsonResponseController@loadOne');
Route::post('/admin/update/member',			'TeamJsonResponseController@update');
Route::post('/admin/delete/team/member',	'TeamJsonResponseController@deleteOne');



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
Route::post('/send/application/form',		'ClientJsonResponseController@applicationLetter')->name('apply_now');
Route::get('/get/all/team/member',			'ClientJsonResponseController@getTeamMembers')->name('team_member');
Route::post('/send/order/request',		    'ClientJsonResponseController@placeNewOrder')->name('order_request');
Route::get('/fetch/all/products',			'ClientJsonResponseController@fetchProducts')->name('fetch_products');
Route::post('clear/contact/mail/queue',     'ClientJsonResponseController@clearQueue');
Route::get('/get/all/job/placement',		'ClientJsonResponseController@getJobPlacements');
Route::get('/get/all/job/type',				'ClientJsonResponseController@getJobPlacementsTypes');
Route::get('/get/one/job/placement/{id}',	'ClientJsonResponseController@getJobPlacementByRef');

Route::get('migrate', function(){
	Artisan::call('migrate');
	return redirect('/');
});
