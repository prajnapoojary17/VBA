<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PaymentHistory;
use App\Models\RegisteredPerson;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Hash;
use DB;

class LoginController extends ApiController {

    //

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        try {
            $token = \JWTAuth::attempt($credentials);
        } catch (JWTException $ex) {
            return $this->respondWithError('500', 'could_not_create_token', []);
        }

        if (!$token) {
            return $this->respondWithError('LOGIN_ERROR', 'Invalid Username and Password!');
        }

        // return response()->json(compact('token'));
        $data = ['token' => $token];
        return $this->respondWithSuccess('SUCCESS_TOKEN', 'SUCCESS_TOKEN', $data);
    }

    public function logout() {
        try {
            // \JWTAuth::invalidate();
            \JWTAuth::parseToken()->invalidate();
        } catch (JWTException $ex) {
            return $this->respondWithError('500', 'could_not_invalidate_token', []);
        }
        return $this->respondWithError('204', 'error occured', []);
    }

    public function refreshToken(Request $request) {
        try {

            $token = \JWTAuth::getToken();
            $token = \JWTAuth::refresh($token);
        } catch (JWTException $exception) {

            return $this->respondWithError('500', 'could_not_refresh_token' + $exception->getMessage(), []);
        }
        return $this->respondWithSuccess('SUCCESS_TOKEN', 'SUCCESS_TOKEN', compact('token'));
    }

    public function store(Request $request) {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function getData() {
        $user = User::all();
        return $this->respondWithSuccess('SUCCESS_TOKEN', 'SUCCESS_TOKEN', $user);
    }

    public function signUp(Request $request) {

        // $signup = $request->only('email', 'password');
        // $data=$request->all();

        $response = User::where('email', $request->email)->count();

        if ($response) {
            return $this->respondWithError('EMAIL_ALREADY_EXIST', $response);
        } else {

            $data = User::create(['email' => $request['email'], 'password' => Hash::make($request['password']), 'status' => 'pending','confirmed' => 1]);
            if ($data) {
                $response = User::find($data->userId);
                return $this->respondWithSuccess('USER_CREATED', $response);
            }
            //  print_r($data); exit();
        }
    }

    public function loginPayment(Request $request) {

        /* $response = User::where('email', $request['email'])->first();
          if ($response && Hash::check($request['password'], $response->password)) {
          $data = ['userId' => $response->userId, 'status' => $response->status, 'totalLicenses' => $response->totalLicenses, 'email' => $response->email];
          return $this->respondWithSuccess('LOGIN_REQUEST_SUCCESS', $data);
          } else {
          return $this->respondWithError('AUTHENTICATION_FAILED', []);
          } */
        $response = User::where('email', $request['email'])->first();
        if (!$response) {
            return $this->respondWithError('EMAIL_NOT_FOUND', []);
        }

        if (Hash::check($request['password'], $response->password)) {
            if (1== 1) {
                $data = ['userId' => $response->userId, 'status' => $response->status,
                    'totalLicenses' => $response->totalLicenses, 'email' => $response->email];
                return $this->respondWithSuccess('LOGIN_REQUEST_SUCCESS', $data);
            } else {
                return $this->respondWithSuccess('EMAIL_VERIFICATION_PENDING', []);
            }
        } else {
            return $this->respondWithError('PASSWORD_WRONG', []);
        }
    }

    public function checkEmail(Request $request) {

        $response = User::where('email', $request->email)->count();
        if ($response) {
            return $this->respondWithSuccess('EMAIL_ALREADY_EXIST', $response);
        } else {

            return $this->respondWithSuccess('EMAIL_NOT_EXIST', $response);
        }
    }

    public function paymentDetails(Request $request) {

        $data = $request->only('userId', 'mode', 'txnId', 'bankRefNum', 'issuingBank', 'cardType', 'amount');

        $responsePayment = PaymentHistory::create($data);
        $responseUser = User::where('userId', $request->userId)->update(['status' => 'active', 'totalLicenses' => $request->totalLicenses,
            'firstName' => $request->firstName, 'lastName' => $request->lastName, 'address1' => $request->address1,
            'address2' => $request->address2, 'city' => $request->city, 'state' => $request->state, 'pinCode' => $request->pinCode, 'phoneNumber' => $request->phoneNumber]);
        $userDetail = User::where('userId', $request->userId)->first();
        //return  $this->respondWithSuccess('PAYMENT_HISTORY_RECORDER',$response);
        if ($responsePayment && $responseUser) {
            $response = ['user' => $userDetail, 'paymentHistory' => $responsePayment];
            return $this->respondWithSuccess('PAYMENT_HISTORY_RECORDED', $response);
        } else {

            return $this->respondWithError('PAYMENT_HISTORY_NOT_RECORDER', $response);
        }
    }

    public function isExistGstn($userId) {

        $response = RegisteredPerson::where('userId', $userId)->exists();
        if ($response) {
            return $this->respondWithSuccess('GSTN_EXIST_FOR_USER', $response);
        } else {
            return $this->respondWithSuccess('GSTN_NOT_EXIST_FOR_USER', $response);
        }
    }

    public function insertLicenseDetail(Request $request) {
        $data = $request->only('userId', 'gstnId', 'legalName', 'tradeName', 'vatRegNo', 'serviceTaxRegNo', 'exciseRegNo');

        $response = RegisteredPerson::create($data);

        if ($response) {

            return $this->respondWithSuccess('LICENSE_DETAILS_INSERTED', $data);
        } else {
            return $this->respondWithError('LICENSE_DETAILS_NOT_INSERTED', []);
        }
    }

    public function retriveRegisteredPersonDetail($id) {
        //$response=RegisteredPerson::where('');
    }

    public function retrieveGstnDetail($id) {

        $resposne = RegisteredPerson::where('userId', $id)->first();
        if ($resposne) {

            return $this->respondWithSuccess('LICENSE_DETAILS_FOUND', $resposne);
        } else {
            return $this->respondWithError('LICENSE_DETAILS_NOT_FOUND', []);
        }
    }

    public function totalGstn($userId) {

        $response = RegisteredPerson::where('userId', $userId)->count();
        $response = ['gstnCount' => $response];
        return $this->respondWithSuccess('GSTN_COUNT_FOR_USER', $response);
    }

    public function retrieveGstnDetails($id) {

        $resposne = RegisteredPerson::where('userId', $id)->get();
        if ($resposne) {

            return $this->respondWithSuccess('LICENSE_DETAILS_FOUND', $resposne);
        } else {
            return $this->respondWithError('LICENSE_DETAILS_NOT_FOUND', []);
        }
    }

    public function retrieveUserById($userId) {

        $response = User::where('userId', $userId)->first();
        if ($response) {

            return $this->respondWithSuccess('USER_DETAIL_FOUND', $response);
        } else {
            return $this->respondWithError('USER_DETAIL_NOT_FOUND', []);
        }
    }

    public function sendVerificationEmail(Request $request) {

        if (!$request->email) {
            return $this->respondWithError('INPUT_EMAIL_NOT_RECIEVED', []);
        }

        $response = User::where('email', $request->email)->count();
        if ($response) {
            $confirmationCode = str_random(60);
            $data = User::where('email', $request->email)->update([
                'confirmationCode' => $confirmationCode, 'confirmed' => 0
            ]);

            if ($data) {
                $response = User::where('email', $request->email)->first();
                return $this->respondWithSuccess('UPDATED_EMAIL_VERIFICATION', $response);
            } else {
                return $this->respondWithSuccess('NOT_UPDATED_EMAIL_VERIFICATION', []);
            }
        } else {

            return $this->respondWithError('EMAIL_IS_NOT_REGISTERED', []);
        }
    }

    public function verifyRegistrationEmail($verifyCode) {

        if ($verifyCode) {
            $response = User::where('confirmationCode', $verifyCode)->count();
            if ($response) {
                $data = User::where('confirmationCode', $verifyCode)->update(['confirmed' => 1]);
                if ($data) {
                    return $this->respondWithSuccess('USER_EMAIL_CONFIRMED', []);
                }
            } else {
                return $this->respondWithError('INVALID_VERIFICATION', []);
            }
        }
    }

    public function forgotPasswordLink(Request $request) {


        if (!$request->email) {
            return $this->respondWithError('INPUT_EMAIL_NOT_RECIEVED', []);
        }

        $response = User::where('email', $request->email)->count();
        if ($response) {
            $confirmationCode = str_random(60);
            $data = User::where('email', $request->email)->update([
                'confirmationCode' => $confirmationCode, 'confirmed' => 0
            ]);

            if ($data) {
                $response = User::where('email', $request->email)->first();
                return $this->respondWithSuccess('UPDATED_FORGOT_PASSWORD_TOEKN', $response);
            } else {
                return $this->respondWithSuccess('NOT_UPDATED_FORGOT_PASSWORD_TOEKN', []);
            }
        } else {

            return $this->respondWithError('EMAIL_IS_NOT_REGISTERED', []);
        }
    }

    public function verifyForgotPassword($verifyCode) {

        if ($verifyCode) {
            $response = User::where('confirmationCode', $verifyCode)->count();
            if ($response) {
                $data = User::where('confirmationCode', $verifyCode)->first();

                return $this->respondWithSuccess('USER_VERIFIED', $data);
            } else {
                return $this->respondWithError('INVALID_VERIFICATION', []);
            }
        }
    }

    public function updateUserPassword(Request $request) {
        if (!$request->email) {
            return $this->respondWithError('INPUT_EMAIL_NOT_RECIEVED', []);
        }

        $response = User::where('email', $request->email)->count();
        if ($response) {

            $data = User::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

            if ($data) {

                return $this->respondWithSuccess('PASSWORD_UPDATED_SUCCESSFULLY', []);
            } else {
                return $this->respondWithSuccess('PASSWORD_NOT_UPDATED_SUCCESSFULLY', []);
            }
        } else {

            return $this->respondWithError('EMAIL_IS_NOT_REGISTERED', []);
        }
    }

    public function test(){
        //  $data = User::update(['confirmed' => 1]);
          $affected = DB::table('users')->update(array('confirmed' => 1));
    }
}
