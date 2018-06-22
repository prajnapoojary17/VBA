<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller {

    //

    public function paymentError(Request $request) {
        
        /*echo "<pre>";
        print_r($request->all());
        exit;*/
        $data=$request->all();
      //return redirect()->to('billing-address');
       return view('payment.payment_error',['data'=>$data]);
    }

}
