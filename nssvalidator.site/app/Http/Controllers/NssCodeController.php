<?php

namespace App\Http\Controllers;

use App\Http\Requests\NssCodeRequest;
use App\Models\Nss;


class NssCodeController extends Controller {
    
    public function validateInput(NssCodeRequest $req) {
        $nssCodeString = $req->validated()["nsscode"];
        $req->session()->flash('isChecked', true);
        return $this->validateNss($nssCodeString);
    }

    public function validateNss($nssCode) {
        
        return redirect()->route('nssValidate');
    }

}
