<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


    




$app->group(['prefix'=>'api/v1'], function () use ($app) {
  $app->get('/retrieve-question', 'VTransferController@retrieveQuestion');
  $app->get('/data/registeredUser/{registeredPersonId}/category/{categoryId}', 'VTransferController@retrieveQuestionByCategory');
  $app->get('/retrieve-tab', 'VTransferController@retrieveAllTabs');
  $app->get('/retrieve-question-by-category/{id}', 'VTransferController@retrieveTabDetailById');
  $app->get('/retrieve-all-tabs/{id}', 'VTransferController@retrieveTabDetails');
 $app->get('/gstn-detail-by-registered-user-id/{id}', 'VTransferController@getGstnDetailById');
  
   $app->post('/submit-v-billing-data', 'VTransferController@insertVbillingData');
   $app->post('/submit-all-tab-data', 'VTransferController@insertAllTabDetails');
    //JWT ROUTES
  //$app->get('retrievse', 'LoginController@getData');
  //$app->post('login', 'LoginController@login');
 // $app->post('refresh_token', 'LoginController@refreshToken');
  
  
  //vinod
    $app->post('/signup', 'LoginController@signUp');
    $app->post('/login', 'LoginController@loginPayment');
     $app->post('/send-email-verfication', 'LoginController@sendVerificationEmail');
        $app->get('/verify-registration/{emailVerification}', 'LoginController@verifyRegistrationEmail');
      $app->post('/user-forgot-password-link', 'LoginController@forgotPasswordLink');
        $app->get('/verify-forgot-password/{emailVerification}', 'LoginController@verifyForgotPassword');
    $app->post('/update-user-password', 'LoginController@updateUserPassword');
        
     $app->post('/check-email', 'LoginController@checkEmail');
     $app->post('/payment-detial', 'LoginController@paymentDetails');
       $app->get('/gstn-exist/{userId}', 'LoginController@isExistGstn');
       $app->post('/insert-license-detail', 'LoginController@insertLicenseDetail');
            $app->get('/gstn-detail/{userId}', 'LoginController@retrieveGstnDetail');
             $app->get('/total-gstn/{userId}', 'LoginController@totalGstn');
               $app->get('/gstn-details/{userId}', 'LoginController@retrieveGstnDetails');
                $app->get('/registered-person-detail/{gstnId}', 'VTransferController@getRegisteredId');
                    $app->get('/all-tab-data/{registeredId}', 'VTransferController@tabDataByRegisteredId');
               $app->post('/update-register-person-detail', 'VTransferController@updateRegisteredPersonDetail');
               $app->get('/get-user-detail/{userId}', 'LoginController@retrieveUserById');
               $app->get('/get-commodity/{hsnCodeNo}', 'VTransferController@getCommodity');
                $app->post('/update-license-detail', 'VTransferController@updateLicenseDetail');
               $app->post('/store-tab-json', 'VTransferController@storeJson');
                  $app->get('/check-gstn-json/{gstnRegisterId}', 'VTransferController@checkGstnJsonExist');
                
    
});



$app->group(['prefix'=>'api/v1','middleware' => ['api.token'] ], function () use ($app) {
    $app->post('users', 'LoginController@store');
    $app->post('logout', 'LoginController@logout');
    $app->get('retrieve', 'LoginController@getData');
        
      
});
    
    
    
    
    
    
    
    


$app->get('/', function () use ($app) {
	//echo config_path();
	try {
    DB::connection()->getPdo();
} catch (\Exception $e) {
    die("Could not connect to the database.  Please check your configuration.");
}
    return $app->version();
});

