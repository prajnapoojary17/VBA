<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\LoginRequest;
use App\Helpers\Api;
use App\Mail\ConfirmationEmail;
use App\Mail\ForgotPassowrdEmail;
use Session;
use Mail;
use Cookie;

class LoginController extends Controller {

    public function signUpPost(SignUpRequest $request) {


        $methodName_ = 'POST';
        $signupUrl = "signup";
        $str_ = '';
        $post_data = ['email' => $request->email, 'password' => $request->password];
        $curlPostData = serialize($post_data);
        $signup = Api::APIcall($signupUrl, $str_, $methodName_, $curlPostData);

        session(['userAuthDetail' => $signup->data]);

        return response()->json($signup);
    }

    public function loginPost(LoginRequest $request) {

        if ($request->rememberme) {
            // Cookie::make('email', $request->email);
            // Cookie::make('password', $request->password);
            setcookie("email", $request->email);
            setcookie("password", $request->password);
        }
        $methodName_ = 'POST';
        $signupUrl = "login";
        $str_ = '';
        $post_data = ['email' => $request->email, 'password' => $request->password];
        $curlPostData = serialize($post_data);
        $signup = Api::APIcall($signupUrl, $str_, $methodName_, $curlPostData);

        if (isset($signup) && $signup->status == 'error' && $signup->message == 'AUTHENTICATION_FAILED') {
            return response()->json(['status' => 'error', 'message' => 'authFailed']);
        }
        if (isset($signup) && $signup->status == 'error' && $signup->message == 'EMAIL_NOT_FOUND') {
            return response()->json(['status' => 'error', 'message' => 'emailFailed']);
        }
        if (isset($signup) && $signup->status == 'error' && $signup->message == 'PASSWORD_WRONG') {
            return response()->json(['status' => 'error', 'message' => 'passwordWrong']);
        }

        if (isset($signup) && $signup->status == 'success' && $signup->message == 'EMAIL_VERIFICATION_PENDING') {
            return response()->json(['status' => 'error', 'message' => 'emailVerificationPending']);
        }

        if (isset($signup) && $signup->status == 'success' && $signup->message == 'LOGIN_REQUEST_SUCCESS') {
            session(['userAuthDetail' => $signup->data]);
            if ($signup->data->status == 'pending') {
                return response()->json(['status' => 'success', 'redirect' => 'billing']);

                //return redirect('billing-address');
            }
            if ($signup->data->status == 'active' && $signup->data->totalLicenses == 1) {
                return response()->json(['status' => 'success', 'redirect' => 'license']);

                //return redirect('billing-address');
            } else if ($signup->data->status == 'active' && $signup->data->totalLicenses >= 1) {
                return response()->json(['status' => 'success', 'redirect' => 'dashboard']);
            }
        } else {
            
        }
    }

    public function logout() {


        session()->forget('userAuthDetail');
        Session::flush();
        return redirect('/');
    }

    public function verifyEmail() {
        return view('home.email_verification');
    }

    public function verifyEmailPost(Request $request) {

        $methodName_ = 'POST';
        $verifcationEmail = "send-email-verfication";
        $str_ = '';
        $post_data = ['email' => $request->verify_email];
        $curlPostData = serialize($post_data);

        $emailVerification = Api::APIcall($verifcationEmail, $str_, $methodName_, $curlPostData);

        if (isset($emailVerification) && $emailVerification->status == 'success' && $emailVerification->message == 'UPDATED_EMAIL_VERIFICATION') {

            //send email to registered email
            $sendEmail = Mail::to($emailVerification->data->email)->send(new ConfirmationEmail($emailVerification->data));
            if (count(Mail::failures()) > 0) {
                $errors = 'Failed to send password reset email, please try again.';
            }
            return redirect()->to('/');
        }
        if (isset($emailVerification) && $emailVerification->status == 'error' && $emailVerification->message == 'INPUT_EMAIL_NOT_RECIEVED') {
            dd($emailVerification);
            //email not ofund
        }

        if (isset($emailVerification) && $emailVerification->status == 'success' && $emailVerification->message == 'NOT_UPDATED_EMAIL_VERIFICATION') {
            dd($emailVerification);
            //verifcation code is not updated try once again
        }
        if (isset($emailVerification) && $emailVerification->status == 'error' && $emailVerification->message == 'EMAIL_IS_NOT_REGISTERED') {

            return redirect()->to('/');
            dd($emailVerification);
            //email is not registed please register
        }
    }

    public function verifyEmailFromUser($verificationCode) {

        $methodName_ = 'GET';
        $verificationUrl = "verify-registration/";

        $verificationCode = $verificationCode;
        $response = Api::APIcall($verificationUrl, $verificationCode, $methodName_);
        if (isset($response) && $response->status == 'success' && $response->message == 'USER_EMAIL_CONFIRMED') {

            print_r($response);
        } elseif ($response->status == 'error' && $response->message == 'INVALID_VERIFICATION') {
            print_r($response);
        }
    }

    public function forgotPasswordLink(Request $request) {
        $methodName_ = 'POST';
        $verifcationEmail = "user-forgot-password-link";
        $str_ = '';
        $post_data = ['email' => $request->forgot_email];
        $curlPostData = serialize($post_data);


        $emailVerification = Api::APIcall($verifcationEmail, $str_, $methodName_, $curlPostData);


        if (isset($emailVerification) && $emailVerification->status == 'success' && $emailVerification->message == 'UPDATED_FORGOT_PASSWORD_TOEKN') {

            //send email to registered email
            $sendEmail = Mail::to($emailVerification->data->email)->send(new ForgotPassowrdEmail($emailVerification->data));
            if (count(Mail::failures()) > 0) {
                $errors = 'Failed to send password reset email, please try again.';
            }
           echo "Please check your email";
        }
        if (isset($emailVerification) && $emailVerification->status == 'error' && $emailVerification->message == 'INPUT_EMAIL_NOT_RECIEVED') {
            dd($emailVerification);
            //email not ofund
        }

        if (isset($emailVerification) && $emailVerification->status == 'success' && $emailVerification->message == 'NOT_UPDATED_FORGOT_PASSWORD_TOEKN') {
            dd($emailVerification);
            //verifcation code is not updated try once again
        }
        if (isset($emailVerification) && $emailVerification->status == 'error' && $emailVerification->message == 'EMAIL_IS_NOT_REGISTERED') {

            return redirect()->to('/');
            dd($emailVerification);
            //email is not registed please register
        }
    }

    public function verifyForgotPassword($verificationCode) {

        $methodName_ = 'GET';
        $verificationUrl = "verify-forgot-password/";

        $verificationCode = $verificationCode;

        $response = Api::APIcall($verificationUrl, $verificationCode, $methodName_);

        if (isset($response) && $response->status == 'success' && $response->message == 'USER_VERIFIED') {
            session(['verifyPasswordEmail' => $response->data->email]);
            return view('home.reset_password');
           // print_r($response);
        } elseif (isset($response) && $response->status == 'error' && $response->message == 'INVALID_VERIFICATION') {
            //print_r($response);
        }
    }

    public function updateUserPassword(Request $request) {

        $methodName_ = 'POST';
        $verifcationEmail = "update-user-password";
        $str_ = '';
        $verifyEmail = session()->get('verifyPasswordEmail');
        $post_data = ['email' => $verifyEmail, 'password' => $request->password];
        $curlPostData = serialize($post_data);

        $emailVerification = Api::APIcall($verifcationEmail, $str_, $methodName_, $curlPostData);

        if (isset($emailVerification) && $emailVerification->status == 'success' && $emailVerification->message == 'PASSWORD_UPDATED_SUCCESSFULLY') {
            return redirect('/');
        }
    }
}
    