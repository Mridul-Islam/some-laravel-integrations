<?php

namespace App\Services;

use Twilio\Rest\Client;

class SendSmsService
{

	public static function sendSmsByTwilio($recipient, $message)
	{
		$account_sid   = config('services.twilio.secret');
		$auth_token    = config('services.twilio.auth_token');
		$twilio_number = config('services.twilio.number');

		$client = new Client($account_sid, $auth_token);

		$client->messages->create($recipient, 
            ['from' => $twilio_number, 'body' => $message] );
	}


}// End of class



