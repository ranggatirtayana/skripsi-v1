<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function index(){
        return view("Firebase");
    }

    public function sendNotification(){
        $token = "dKfMeJNGOes:APA91bESXK550e-nfTubr96OFGlIM6Tqyn3xujFNdxpa6m9Uq6RedP6_dRwD3NEbRG9WJBjJsfVeWhrgsB1o2LhFISi3MdGpy1gEZUNwYZpfQcl1_wBfNHXve18hEx17QaXl8sBB4y1L";  
        $from = "AAAAuGFIUw0:APA91bHrDdNzCQNO35GvNIODV_o96VbfcNoXd09W5CMr3NY_RUeUQrXMN56zDQAvPXV9hOhnp4-IiSps2_H1EgpNGaRIEeKxDaaElqbrwq3r9weRLF00fVxYnE98FIn8cF9CQgsxUfnw";
        $msg = array
              (
                'body'  => "Rangga - Shift 1",
                'title' => "Jadwal Kerja",
                'receiver' => 'erw',
                'icon'  => "https://image.flaticon.com/icons/png/512/270/270014.png",/*Default Icon*/
                'sound' => 'mySound'/*Default sound*/
              );

        $fields = array
                (
                    'to'        => $token,
                    'notification'  => $msg
                );

        $headers = array
                (
                    'Authorization: key=' . $from,
                    'Content-Type: application/json'
                );
        //#Send Reponse To FireBase Server 
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        dd($result);
        curl_close( $ch );
    }
}
