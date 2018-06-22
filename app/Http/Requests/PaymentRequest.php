<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'email' => 'required|email',
            'firstname' => 'required',
            'lastname' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phone' => 'required'
            
            
        ];
    }
    
    public function messages() {
        return [
        
               'email.required' => 'Please Enter Valid Email',
                'email.email' => 'Please Enter Valid Email',
               'firstname.required' => 'Please Enter First Name',
               'lastname.required' => 'Please Enter  Last Name',
               'address1.required' => 'Please Enter Address',
               'city.required'=>'Please Enter city Name',
             'state.required'=>'Please Enter state Name',
             'zipcode.required'=>'Please Enter zipcode',
             'phone.required'=>'Please Enter phone number'
              
        ];
    }
}
