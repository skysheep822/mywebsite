<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChatbotController extends Controller
{
	public function receive()
	{
	}


	public function receivereq(Request $request)
	{
        	$data = $request->all();
        	//get the user’s id  
		if( $data["object"] == 'page'){
        		if ($request->has('entry.0.messaging.0.message')){
				$id = $data["entry"][0]["messaging"][0]["sender"]["id"];
				$message = $data["entry"][0]["messaging"][0]["message"]["text"];
   	  			$this->sendTextMessage($id, $message);
			}
			else if ($request->has('entry.0.messaging.0.postback')){
				$id = $data["entry"][0]["messaging"][0]["sender"]["id"];
				$title =  $data["entry"][0]["messaging"][0]["postback"]["title"];
				$payload = $data["entry"][0]["messaging"][0]["postback"]["payload"];
				$this->sendPostBack();
			}	
		}
	}


	private function sendTextMessage($recipientId, $messageText)
 	{
        $messageData = [
            "recipient" => [
                "id" => $recipientId
            ],
            "message" => [
                "text" => $messageText
            ]
        ];
	$this->callSendApi($messageData);
	}

	private function sendPostBack()
	{
	
	}

	private function callSendApi($messageData){
        $ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token=' . env("PAGE_ACCESS_TOKEN"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($messageData));
        curl_exec($ch);   
	}
}
