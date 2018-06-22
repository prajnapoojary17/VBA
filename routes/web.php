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

Route::get('/dd', function () {
    return view('welcome');
});

Route::get('/','HomeController@home');
Route::get('/v-transfer-landing-page','HomeController@vTransferLandingPage');
//Get in touch with email function
Route::post('/get-in-touch-with-us','HomeController@getInTouchWithUs');
//payment urls

Route::get('/verify-email','LoginController@verifyEmail');
Route::post('/verify-email','LoginController@verifyEmailPost');
Route::get('/verify-email-from-user/{verificaitonCode}','LoginController@verifyEmailFromUser');
Route::post('/forgot-password-link','LoginController@forgotPasswordLink');
Route::post('/update-user-password','LoginController@updateUserPassword');

Route::get('/verify-forgot-password/{verifcationCode}','LoginController@verifyForgotPassword');

Route::post('/signup', 'LoginController@signUpPost');
Route::post('/login', 'LoginController@loginPost');
Route::get('/faq',function(){

    return view('home.faq');
});


Route::group(['middleware' => ['login']], function () {

    Route::get('/v-transfer-home/{registeredPersonId}/{gstnId}/{legalLicense}','HomeController@vTransferHome');
    Route::post('/save-VTransfer-Data', 'HomeController@saveVTransferData');
     Route::get('/v-transfer-edit/{registeredPersonId}/{gstnId}/{legalLicense}','HomeController@editVTransfer');
    Route::post('/upload-5B-form-files', 'HomeController@upload5BFormFiles');
    Route::post('/upload-5C-form-files', 'HomeController@upload5CFormFiles');

    Route::post('/submit-license', 'HomeController@submitLicense');
    Route::post('/getHash', 'HomeController@getHash');
    Route::any('/thankyou', 'HomeController@paymentStatus');
	Route::any('/payment-error', 'PaymentController@paymentError');
	
    Route::get('/license','HomeController@license');
    Route::get('/license-detail','HomeController@licenseDetail');
    Route::get('/billing-address','HomeController@billingAddress');
    Route::get('/dashboard','HomeController@dashboard');
    Route::get('/logout','LoginController@logout');
    Route::get('/get-started','HomeController@getStarted');
    Route::get('/license-details','HomeController@licenseListDataTable');
    Route::get('/v-transfer-home/{registeredId}','HomeController@vTransferHomeTest');
    Route::get('/print-v-transfer-application','HomeController@printVtransferDetails');
    Route::post('/updated-register-person-detail', 'HomeController@updateRegisterPersonDetail');
    Route::get('/get-gstn-detail/{registeredUerId}','HomeController@editGstnDetail');
    Route::post('/update-license-detail', 'HomeController@updateLicenseDetail');
    Route::post('/getGSTDetails', 'HomeController@getGSTDetails'); 
    Route::post('/fileDownload', 'HomeController@fileDownload');
    Route::get('/printPreview/{registeredPersonId}/{gstnId}/{legalLicense}', 'HomeController@printPreview');
    
    Route::get('/tran-two','TranController@tranTwo');
    Route::get('/tran-three','TranController@tranThree');
     Route::get('/tran-three','TranController@tranThree');
     Route::get('/tran-three-a','TranController@tranThreeA');
     Route::get('/tran-three-b','TranController@tranThreeB');            
});



