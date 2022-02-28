<?php

namespace App\Helpers;


use GuzzleHttp\Client;

class Message
{
    public  static function send($to, $message){
            $client = new Client();
        
            $api    =   '69b34a229962089063dacc99b36b2392';           //  Hajana One account API
            $number =   $to;                                //  Mobile Number
            $mask   =   'TPL';                             //  Registered Mask Name
            $text   =   $message;                     //  Message Content
            $url = 'https://www.hajanaone.com/api/sendsms.php?apikey=69b34a229962089063dacc99b36b2392&phone='.$number.'&sender='.urlencode($mask).'&message='.urlencode($text);
            $result = $client->get($url);
            $data = $result->getBody();
            echo  $data;


    }


}
