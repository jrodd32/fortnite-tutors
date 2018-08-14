<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToMailingListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * This should be public so set to true
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
            'name' => 'required',
            'email' => 'required|email|unique:mailing_list',
            'account_type' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Your name is required',
            'email.required'  => 'An email is required',
            'email.email' => 'Email must be valid.',
            'account_type.required' => 'You must select what you are interested in.'
        ];
    }
}
