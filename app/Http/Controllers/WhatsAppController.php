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
            'access_token' => 'EAAkWxxB35h4BAL1CItzSiVhYBYBpUebXRmZBrv2t4zGi6FWfZAG9MNV9EVt7GfurOUyUPlOJ4ZBcjiv1NCx8D4TgvCd8YuGu8zhIfF7JvvjMYsxAzGj7qHVREG8d4UqZAzH3UCWqt07wEOAWssjZAVv3fZBdrmvBZBl8iaBPiQVZBA0yNFiDmmBuyyNfK8Qw6bHbNerFUZCZCeKREI9wC060qCfYjE5oUI4D0ZD',
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


