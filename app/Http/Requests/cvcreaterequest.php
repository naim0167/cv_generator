<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cvcreaterequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // make sure to authorize true so validation works
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
            'firstname' =>'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required|max:255',
            'zipcode' => 'required|max:255',
            'city' => 'required|max:255',
            'mobile' => 'required|max:25',
            'cv_email' => 'required|max:255',
            'birthday' => 'required',
            'nationality' => 'required|max:255',
        ];
    }
}
