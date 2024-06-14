<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
use App\Models\User;

class SmsAllController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

     //function to send sms for all users ...
    public function SmsForAll(){

        $receiverNumbers = User::get();
        $message = "Yes you right";

        try {
  
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            foreach($receiverNumbers as $receiverNumber) {
                //return $record;
                //echo json_encode($record->phone);
                $value = json_encode($receiverNumber->phone);
                //echo ($value);
                $client = new Client($account_sid, $auth_token);
                $client->messages->create($value, [
                    'from' => $twilio_number, 
                    'body' => $message]);
            }
            dd('SMS Sent Successfully.');
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }

}
