<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Jadwal;
class FirebaseController extends Controller
{
    public function index(){
        return view("Firebase");
    }

    public function sendNotification($id){
        $jadwal = Jadwal::find($id);
        $karyawan = Karyawan::where("kd_pegawai",$jadwal->kd_pegawai)->first();

        $token = $karyawan->token;
        $from = "AAAAH8w_zy4:APA91bG_3Nfl5vw5WNvKahD8eRx_EalrR2ifgAfsJkEs72f6CKNxpOq2kcFlO9MeuOIt_Nq-NQlTM4IjtCP7dCP2jV_ngLxqvefNd4zucLjJRj8rMJ77YFFM3L_y3uF0JlFQExz5BPaU";
        $message = $jadwal->jadwal;
        

        $msg = array
        (
            'message' 	=> 'here is a message. message',
            'title'		=> 'This is a title. title',
            'subtitle'	=> 'This is a subtitle. subtitle',
            'tickerText'	=> 'Ticker text here...Ticker text here...Ticker text here',
            'vibrate'	=> 1,
            'sound'		=> 1,
            'largeIcon'	=> 'large_icon',
            'smallIcon'	=> 'small_icon'
        );
        $json_data = [
            "to" => $token,
            "notification" => [
                "body" => $message,
                "title" => "PMI-JADWAL",
                "icon" => "ic_launcher"
            ],
            
        ];
        $data = json_encode($json_data);
//FCM API end-point
        $url = 'https://fcm.googleapis.com/fcm/send';
//api_key in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
        $server_key = 'YOUR_KEY';
//header with content_type api key
        $headers = array(
            'Content-Type:application/json',
            'Authorization:key='.$from
        );
//CURL request to route notification to FCM connection server (provided by Google)
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Oops! FCM Send Error: ' . curl_error($ch));
        }
        // dd($result);
        curl_close($ch);
        return redirect()->route("jadwal.index");

    }
}
