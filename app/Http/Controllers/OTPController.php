<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OTPController extends Controller
{
    public function sent_otp()
    {
        return view('otp');
    }
}
