<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\TwiML\MessagingResponse;

class ReceiveController extends Controller
{
    

public function receive(Request $request)
{
    $twiml = new MessagingResponse();
    $message = $twiml->message("Thanks for your message!");

    return $twiml;
}

}
