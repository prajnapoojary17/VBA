<?php
	   $payUBaseUrl = "https://test.payu.in";
	return [
		'API_BASE_URL'=>'http://192.168.9.214/vbillingapp/api/public/api/v1/',
        // 'API_BASE_URL'=>'http://localhost/livetest/public/api/v1/',
		//Merchant key here as provided by Payu
        //Please change this value with live key for production
        'MERCHANT_KEY' => "gtKFFx",  
        // Merchant Salt as provided by Payu
        //Please change this value with live salt for production
        'SALT' => "eCwWELxi", 
        //Success page url
        'SURL' => 'thankyou',
        //Failure page url
        'FURL' => 'thankyou',
        //Action URL
        'ACTION_URL' => $payUBaseUrl.'/_payment',
        //Hash sequence
        'HASH_SEQUENCE' => "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10",
    ];