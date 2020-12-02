<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NssCodeRequest;

class NssCodeController extends Controller {
    
    public function validateCode(NssCodeRequest $req) {
        
       $req->session()->put('isChecked', true);
        return redirect()->route('nssValidate');
    }

}
