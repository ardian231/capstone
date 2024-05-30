<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChaptchaController extends Controller
{
    public function reloadCaptcha() {
    return response()->json(['captcha'=> captcha_img()]);
}

}
