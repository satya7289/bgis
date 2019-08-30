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

Route::get('/', 'Controllers@home');
Route::get('/about', 'Controllers@about');
Route::get('/contact', 'Controllers@contact');
Route::post('/contact', 'Controllers@contactSubmit');
Route::get('/admissions/apply', 'Controllers@applyForTest');
Route::post('/admissions/paynow', 'Controllers@payForTest');
Route::post('/admissions/makepayment', 'Controllers@makePaymentForTest');
Route::post('/admissions/payment', 'Controllers@responseForTest');
Route::get('/admissions', 'Controllers@admissions');
Route::post('/admissions', 'Controllers@helpSubmit');
Route::get('/contribute', 'Controllers@contribute');
Route::get('/academics', 'Controllers@academics');
Route::get('/news', 'Controllers@newsPublic');
Route::get('/news/{slug}', 'Controllers@newsPublicSingle');
Route::get('/faculty','Controllers@faculty');
Route::get('/studentlife','Controllers@studentLife');
Route::get('/skill-development-courses','Controllers@vocational');
Route::get('/publications','Controllers@publications');


Route::get('/donate', 'Controllers@donatePublic');
Route::post('/donate', 'Controllers@donatePublicInternalRedirect');
Route::post('/donate/response', 'Controllers@donatePublicResponse');
Route::post('/payment/cancel', 'Controllers@paymentCancel');


Route::post('/admin/faculty/orderUp/{id}','FacultyController@orderUp');
Route::get('/admin/donationadd','DonationController@create');
Route::post('/admin/adddonations','DonationController@store');
Route::get('/admin/changepassword','adminControllers@changePassword');
Route::post('/admin/changepassword','adminControllers@postChangePassword');
Route::get('/admin/homevideo','adminControllers@homeVideo');
Route::post('/admin/homevideo','adminControllers@postHomeVideo');
Route::post('/admin/faculty/orderDown/{id}','FacultyController@orderDown');
Route::get('/admin', 'adminControllers@home')->middleware('auth');
Route::get('/admin/contact', 'adminControllers@contact')->middleware('auth');
Route::get('/admin/query/export', 'adminControllers@queryExport');
Route::get('/admin/query', 'adminControllers@query')->middleware('auth');
Route::patch('/admin/contact/{contact}', 'adminControllers@contactUpdate')->middleware('auth');
Route::resource('/admin/events', 'newsController')->middleware('auth');
Route::get('/admin/admissions/export', 'AdmissionsController@export');
Route::resource('/admin/admissions', 'AdmissionsController')->middleware('auth');
Route::resource('/admin/tickets', 'TicketController')->middleware('auth');
Route::patch('/admin/faculty/updateOne/{id}', 'FacultyController@updateOne')->middleware('auth');
Route::resource('/admin/faculty', 'FacultyController')->middleware('auth');
Route::resource('/admin/publications', 'PublicationController')->middleware('auth');
Route::resource('/admin/users', 'UserController');
Route::resource('/admin/roles', 'RoleController');
Route::resource('/admin/permissions', 'PermissionController');
Route::get('/admin/donations/export', 'DonationController@export');
Route::resource('/admin/donations', 'DonationController');
Route::resource('/admin/dates', 'AdmissionTestDates')->middleware('auth');

// New Changes Start from Here
Route::resource('/admin/pages', 'PageController')->middleware('auth');
Route::resource('/admin/pages/{page}/image', 'ImageController')->middleware('auth');
// End Here



//Custom Routes
Route::get('/campus-facilities','Controllers@campusFacilities');
Route::get('/community-scholarship','Controllers@communityScholarship');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pay', function() {
    return view('pay.index');
});
Route::post('/reqhan', function() {
    return view('pay.ccavRequestHandler');
});


