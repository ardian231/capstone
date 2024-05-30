<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mews\Captcha\Facades\Captcha;

class RegisterController extends Controller
{
   protected function validator(array $data) {
    return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'role' => ['required', 'string'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'captcha' => ['required', 'captcha'],
    ]);
}
}
