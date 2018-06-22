<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TranController extends Controller {

    //

    public function tranOne() {

        return view('tran.tran_2');
    }

    public function tranTwo() {
        return view('tran.tran_2');
    }

     public function tranThree() {
        return view('tran.tran_3');
    }

    public function tranThreeA() {
        return view('tran.tran_3a');
    }

    public function tranThreeB() {
        return view('tran.tran_3b');
    }

}
