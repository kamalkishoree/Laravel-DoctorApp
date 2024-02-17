<?php

namespace App\Http\Traits;

trait PushNotificationTrait {
  public function sendNotification($device_key,$id,$name) {
    $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = $device_key;
        $serverKey = 'AAAAx0cbK2A:APA91bGuosQS1UAsmxu3u8hCPmCju-8NCwCdcHRr-MZNLJCTTx9Nk2dZu9gmfdjCo6wDlxw5IPuf0ixzlhsQQpb_2Yp0WS9ppWR7k0mCO8Zz16GXHA4206i-21i64ZNVAK9idez5BO28';
        $data = [
            "registration_ids" => array($FcmToken),
            "notification" => [
                "title" => "Hi ".$name,
                "body" => "your appointment has been started",  
                "image" => $id,
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);

        // Execute post
        $result = curl_exec($ch);

        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        

        // Close connection
        curl_close($ch);

        // FCM response
        return($result);
  }
  
	public function rejectNotification($device_key,$id,$name){
		$url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = $device_key;
        $serverKey = 'AAAAx0cbK2A:APA91bGuosQS1UAsmxu3u8hCPmCju-8NCwCdcHRr-MZNLJCTTx9Nk2dZu9gmfdjCo6wDlxw5IPuf0ixzlhsQQpb_2Yp0WS9ppWR7k0mCO8Zz16GXHA4206i-21i64ZNVAK9idez5BO28';
        $data = [
            "registration_ids" => array($FcmToken),
            "notification" => [
                "title" => $name." is unavailable",
                "body" => $name." Declined the call",  
                "image" => $id,
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);

        // Execute post
        $result = curl_exec($ch);

        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        

        // Close connection
        curl_close($ch);

        // FCM response
        return($result);
	}
}