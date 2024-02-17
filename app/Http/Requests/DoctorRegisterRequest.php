<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class DoctorRegisterRequest extends FormRequest
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
            'document_image' =>  'required|image|mimes:jpeg,png,jpg|max:2048',
            'image' =>  'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'licence_id' => 'required',
            'password' => 'required|min:6',
            'specialist_id' => 'required',
            'address' => 'required',
            'location' => 'required',
            'terms'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Please enter valid email address!',
            'email.unique' => 'This email address is alerdy exist!',
            'phone.unique' => 'This phone number is alerdy exist!',
            'phone.required' => 'Please enter your phone number!',
            'password.required' => 'Please enter your password!',
            'email.required' => 'Please enter your email address!',
            'name.required' => 'Please enter your name!',
            'location.required' => 'Please enter your location!',
            'address.required' => 'Please enter your address!',
            'specialist_id.required' => 'Please select your specialist!',
            'licence_id.required' => 'Please enter your licence id!',
            'image.required' => 'Please uploade your profile image!',
            'image.mimes' => 'This format not accepted!, Please upload jpeg,png,jpg format image',
            'image.image' => 'The type of the uploaded image should be an image.',
            'image.max' => 'Failed to upload an image. The image maximum size is 2MB',
            'document_image.required' => 'Please uploade your document!',
            'document_image.mimes' => 'This format not accepted!, Please upload jpeg,png,jpg format document',
            'document_image.image' => 'The type of the uploaded document should be an image.',
            'document_image.max' => 'Failed to upload an document. The document maximum size is 2MB',
        ];
    }
}
