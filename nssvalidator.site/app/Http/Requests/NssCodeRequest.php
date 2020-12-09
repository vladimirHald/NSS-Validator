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
            'nssFull' => 'required|between:15,15',
            'nssSex' => '',
            'nssYear' => '',
            'nssMonth' => '',
            'nssDepartment' => '',
            'nssComune' => '',
            'nssOrderNumber' => '',
            'nssControlKey' => ''
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
            'nsscode.between' => 'Поле может содержать только 15 символов'
        ];
    }
    
}
