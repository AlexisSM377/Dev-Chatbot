<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

class WhatsAppController extends Controller
{
    public function testEnviodeMensaje()
    {
        // Instantiate the WhatsAppCloudApi super class.
        $whatsapp_cloud_api = new WhatsAppCloudApi([
            'from_phone_number_id' => '107197942400428',
            'access_token' => 'EAAUzZBouhua8BALU9j16xZCxiEt1zKBj1ZB6tfBhFmu8D5HN31RZCIzaVZBZC4uLdAJHiHnNGb9GwfJZBgMHPdhcZCpjVntUR1Rrj1mlHZCyrDUhUO5wIPkXveLrYfPcblt7snKYJenhAN6JOKSyGQNhqk0tZBPhQEDmqoZCFTANJuzfG42hNXlggHj',
        ]);

        $whatsapp_cloud_api->sendTextMessage('527121461514', '¡Hola! Soy Bitbot, tu asistente virtual de BIT, ¡es un gusto contactar contigo! 🤖');
    }


    
        // public function sendTestMessage()
        // {
        //     $credentials = [
        //         'instanceId' => '200969112508626',
        //         'access_token' => 'EAAC2x8SP2NIBAMWKBlUHagUxydtAYWd2P9fJh6hwELQmXJG5pqqVxPLulpQ0KcfhIosLU3Vja67cHmuOUT40WYuA57mfZCfuaVkhaBmmz2fFlWZCvVqROUzrJPQUCA2IUD7ZA9DvVAnHOlIAZCIc4CWG1oq8dkZAg3cnMfsmTmTQewnmCQGbalSZCKzIuIQ6WVbIqhxO1ZBaQZDZD',
        //         'from_phone_number_id' => '107197942400428',
        //     ];
            
            
        //     $to = '527121461514';

        //     $api = new WhatsAppCloudApi($credentials);

        //     $message = [
        //         'from' => '107197942400428',
        //         'to' => $to,
        //         'text' => 'This is a test message from Laravel!',
        //     ];

        //     $response = $api->sendTextMessage('527121461514', 'Holaaa');
        // }
}


