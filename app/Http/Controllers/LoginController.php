<?php

namespace App\Http\Controllers;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function login(Request $request) {
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|string',
        'captcha' => 'required|captcha'
    ]);

    // Proses autentikasi
}
}
