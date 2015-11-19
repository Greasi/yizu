<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DoRegisterRequest extends Request
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
            'password' => 'required|min:6',
            // 也可以使用数组
            //'published_at' => ['required', 'date'],
        ];
    }
}
