<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function senMessages()
    {
        try {
            $token = 'EAAkWxxB35h4BAL1CItzSiVhYBYBpUebXRmZBrv2t4zGi6FWfZAG9MNV9EVt7GfurOUyUPlOJ4ZBcjiv1NCx8D4TgvCd8YuGu8zhIfF7JvvjMYsxAzGj7qHVREG8d4UqZAzH3UCWqt07wEOAWssjZAVv3fZBdrmvBZBl8iaBPiQVZBA0yNFiDmmBuyyNfK8Qw6bHbNerFUZCZCeKREI9wC060qCfYjE5oUI4D0ZD';
            $from_phone_number_id = '107197942400428';
            $payload = [
                'messaging_product' => 'whatsapp',
                'to' => '527121461514',
                'type' => 'template',
                'template' => [
                    'name' => 'hello_world',
                    'language' => [
                        'code' => 'en_US',
                    ],
                ],
            ];

            $message = Http::withToken($token)
                ->get('https://graph.facebook.com/v17.0/107197942400428/messages', $payload)
                ->throw()
                ->json();

            return response()->json(
                [
                    'success' => true,
                    'data' => $message,
                ],
                200,
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'message' => $e->getMessage(),
                ],
                500,
            );
        }
    }

    public function verifyWebhook(Request $request)
    {
        try {
            $verifyToken = 'JBDJASB646SDFGHS774BGD0';
            $query = $request->query();

            $mode = $query['hub_mode'];
            $token = $query['hub_verify_token'];
            $challenge = $query['hub_challenge'];

            if ($mode && $token) {
                if ($mode === 'subscribe' && $token == $verifyToken) {
                    return response($challenge, 200)->header('Content-Type', 'text/plain');
                       
                }
            }

            throw new Exception('Invalid verify token');

            return response()->json(
                [
                    'success' => true,
                    'data' => $query['hub_challenge'],
                ],
                200,
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'message' => $e->getMessage(),
                ],
                500,
            );
        }
    }
}
