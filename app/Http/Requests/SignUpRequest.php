<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
      public function rules()
    { 
        return [
            'email' => 'required|email|regex: /^[A-Za-z\d=@_.-]+$/',
            'password' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%@]).*$/|',
            'confirm' => 'required|same:password|min:8',
            'terms' => 'required' 
        ];
    }
    
    public function messages() {
        return [
        
               'email.required' => 'Please Enter Valid Email',
                'email.email' => 'Please Enter Valid Email',
               'password.required' => 'Please Enter Password',
               'password.same' => 'Confirmed Password is not matching',
               'password.min' => 'Password Must me minimum 8',
             'password.regex' => 'Password Must contain atleast one letter,number and special character',
               'terms.required'=>'Please Accept Terms & Condtion'
              
        ];
    }
}
