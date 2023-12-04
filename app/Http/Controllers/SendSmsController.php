<?php

namespace App\Http\Controllers;

use App\Services\SendSmsService;
use Illuminate\Http\Request;

class SendSmsController extends Controller
{

    public function sendSmsByTwilio(Request $request)
    {
        $receipent_phone_no = $request->receipent_phone_no;

        SendSmsService::sendSmsByTwilio($receipent_phone_no, 'Hi, How are You, my first');
    }



}// End of class
