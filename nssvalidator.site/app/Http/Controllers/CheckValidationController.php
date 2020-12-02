<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckValidationController extends Controller
{
    public function checkValidation() {
        $view = view('nssValidate');
        return $view;
    }
}
