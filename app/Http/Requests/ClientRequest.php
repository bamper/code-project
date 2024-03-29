<?php

namespace CodeProject\Http\Requests;

use CodeProject\Http\Requests\Request;

class ClientRequest extends Request
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
            'name' => 'required',
            'responsible' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'obs' => 'required'
        ];
    }
}
