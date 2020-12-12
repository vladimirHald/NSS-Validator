<?php

namespace App\Http\Controllers;

use Illuminate\Support\MessageBag;
use App\Http\Requests\NssCodeRequest;
use App\Services\NssValidation\Nss;


class NssCodeController extends Controller {
    
    public function validateInput(NssCodeRequest $req) {
        $nssCodeString = $req->validated();
        $req->session()->flash('isChecked', true);
        return $this->validateNss($nssCodeString);
    }

    public function validateNss($nssValues) {
        $errors = new MessageBag();
        $nssCodeString = $nssValues["nssFull"];
        $nssObj = new Nss($nssCodeString);
        if ($nssValues["nssSex"] != $nssObj->getSex())
            $errors->add("SexField", "Неправильно введено поле Sex");

        if ($nssValues["nssYear"] != $nssObj->getYear())
            $errors->add("YearField", "Неправильно введено поле Year");

        if ($nssValues["nssMonth"] != $nssObj->getMonth())
            $errors->add("MonthField", "Неправильно введено поле Month");

        if ($nssValues["nssDepartment"] != $nssObj->getDepartment())
            $errors->add("DepartmentField", "Неправильно введено поле Department");

        if ($nssValues["nssComune"] != $nssObj->getComune())
            $errors->add("ComuneField", "Неправильно введено поле Comune");

        if ($nssValues["nssOrderNumber"] != $nssObj->getOrderNumber())
            $errors->add("OrderNumberField", "Неправильно введено поле Order Number");

        if ($nssValues["nssControlKey"] != $nssObj->getControlKey())
            $errors->add("ControlKeyField", "Неправильно введено поле Control Key");
            
        if ($errors->any())
            return redirect()->route('nssValidate')->withErrors($errors);
        else
            return redirect()->route('nssValidate');
    }

}
