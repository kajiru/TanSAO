<?php
/**
 * Created by PhpStorm.
 * User: jaspergeophrey
 * Date: 8/12/15
 * Time: 2:13 PM
 */

namespace TanSAO\Http\Requests;

use TanSAO\Http\Requests\Request;
use Auth;

class VisaApplicantRequest extends Request
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
            'name'   => 'required|Min:2',
            'phoneNumber'  => 'required',
            'email'       => 'required'
        ];
    }
}
