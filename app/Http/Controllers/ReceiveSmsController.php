<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\TwiML\MessagingResponse;
//use Exception;
//use Twilio\Rest\Client;
//use App\Models\User;

class ReceiveSmsController extends Controller
{
    //function to reply and update db based on receiving sms ...
    public function smsForUpdate(){
        
        //Get the PHP helper library from https://twilio.com/docs/libraries/php
        require_once 'vendor\twilio\sdk\src\Twilio\autoload.php'; // Loads the library
        $response = new MessagingResponse();
        $response->message("The Robots are coming! Head for the hills!");
        print $response;
    }

      /*  /**
     * Write code on Method
     *
     * @return response()
     */


         //function to send sms for all users ...
         /*public function smsForUpdate(){

            $message = "finally you do it";
            $to_phone = $_REQUEST['From'];
      
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
    
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($to_phone, [
                'from' => $twilio_number, 
                'body' => $message]);
        }*/

    
        /*public function smsForUpdate(){

            //require_once 'vendor/autoload.php';
            require_once 'vendor\twilio\sdk\src\Twilio\autoload.php';

            $from = $_REQUEST['From'];
            $body = $_REQUEST['Body'];

            $user_phon = json_encode($from);
            $user_name = json_encode($body);

            $user = User::get()->where('phone', $user_phone);
            $user -> name = $user_name;
            $user->save();

        }*/

}
