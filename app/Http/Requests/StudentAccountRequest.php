<?php

namespace TanSAO\Http\Requests;

use TanSAO\Http\Requests\Request;
use Auth;

class StudentAccountRequest extends Request
{
    /**
     * Authorize all users to make this request.
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
            'firstName'   => 'required|Min:2',
            'familyName'  => 'required|Min:2',
            'email'       => 'required',
            'dateOfBirth' => 'required'
        ];
    }
}
