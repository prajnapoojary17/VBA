<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicenseRequest extends FormRequest
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
            'gstnId' => 'required',
            'legalName' => 'required',
            'tradeName'=>'required'
            
        ];
    }
    
    public function messages() {
        return [
        
               'gstnId.required' => 'Please Enter GSTN id',
               'legalName.required' => 'Please Enter Legal name',
                'tradeName.required'=>'Please Enter Trade Name'
               
              
        ];
    }
}
