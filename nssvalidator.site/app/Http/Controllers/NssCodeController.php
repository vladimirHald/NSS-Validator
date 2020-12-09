<?php

namespace App\Http\Controllers;

use App\Http\Requests\NssCodeRequest;
use App\Models\Nss;


class NssCodeController extends Controller {
    
    public function validateInput(NssCodeRequest $req) {
        $nssCodeString = $req->validated()["nssFull"];
        
        $nssObj = new Nss($nssCodeString);
        dd($nssObj);
        $req->session()->flash('isChecked', true);
        return $this->validateNss($nssCodeString);
    }

    public function validateNss($nss) {
        
        return redirect()->route('nssValidate');
    }

}
