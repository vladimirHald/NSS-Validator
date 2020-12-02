<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class NssCodeRequest extends FormRequest
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
            'nsscode' => 'required|numeric|digits_between:15,15'
        ];
    }

    public  function attributes()
    {
        return [
            'nsscode' => 'NSS Code'
        ];
    }

    public function messages()
    {
        return [
            'nsscode.required' => 'Поле является обязательным',
            'nsscode.digits_between' => 'Поле может содержать только 15 символов',
            'nsscode.numeric' => 'Поле может содержать только цифры'
        ];
    }
    
}
