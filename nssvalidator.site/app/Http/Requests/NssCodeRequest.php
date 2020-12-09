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
            'nssSex' => 'required|between:1,1',
            'nssYear' => 'required|between:2,2',
            'nssMonth' => 'required|between:2,2',
            'nssDepartment' => 'required|between:2,3',
            'nssComune' => 'required|between:2,3',
            'nssOrderNumber' => 'required|between:3,3',
            'nssControlKey' => 'required|between:2,2'
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
            'nssSex.between' => 'Поле Sex может содержать только 1 символ',
            'nssSex.required' => 'Поле Sex является обязательным',
            'nssYear.between' => 'Поле Year может содержать только 2 символа',
            'nssYear.required' => 'Поле Year является обязательным',
            'nssMonth.between' => 'Поле Month может содержать только 2 символа',
            'nssMonth.required' => 'Поле Month является обязательным',
            'nssDepartment.between' => 'Поле Department может содержать от 2 до 3 символов',
            'nssDepartment.required' => 'Поле Department является обязательным',
            'nssComune.between' => 'Поле Comune может содержать от 2 до 3 символов',
            'nssComune.required' => 'Поле Comune является обязательным',
            'nssOrderNumber.between' => 'Поле OrderNumber может содержать только 3 символа',
            'nssOrderNumber.required' => 'Поле OrderNumber является обязательным',
            'nssControlKey.between' => 'Поле ControlKey может содержать только 2 символа',
            'nssControlKey.required' => 'Поле ControlKey является обязательным',

        ];
    }
    
}
