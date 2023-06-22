<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Netflie\WhatsAppCloudApi\Message\Template\Component;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

class TemplateMessageController extends Controller
{
    public function templateMessage()
    {
        // $whatsapp_cloud_api = new WhatsAppCloudApi([
        //     'from_phone_number_id' => '107197942400428',
        //     'access_token' => 'EAAUzZBouhua8BALU9j16xZCxiEt1zKBj1ZB6tfBhFmu8D5HN31RZCIzaVZBZC4uLdAJHiHnNGb9GwfJZBgMHPdhcZCpjVntUR1Rrj1mlHZCyrDUhUO5wIPkXveLrYfPcblt7snKYJenhAN6JOKSyGQNhqk0tZBPhQEDmqoZCFTANJuzfG42hNXlggHj',
        // ]);

        $whatsapp_cloud_api = new WhatsAppCloudApi([
            'from_phone_number_id' => '107197942400428',
            'access_token' => 'EAAUzZBouhua8BALU9j16xZCxiEt1zKBj1ZB6tfBhFmu8D5HN31RZCIzaVZBZC4uLdAJHiHnNGb9GwfJZBgMHPdhcZCpjVntUR1Rrj1mlHZCyrDUhUO5wIPkXveLrYfPcblt7snKYJenhAN6JOKSyGQNhqk0tZBPhQEDmqoZCFTANJuzfG42hNXlggHj',
        ]);

        $component_header = [];

        $component_body = [
            [
                'type' => 'text',
                'text' => '*Mr Jones*',
            ],
        ];

        $component_buttons = [
            [
                'type' => 'button',
                'sub_type' => 'quick_reply',
                'index' => 0,
                'parameters' => [
                    [
                        'type' => 'text',
                        'text' => 'Yes',
                    ],
                ],
            ],
            [
                'type' => 'button',
                'sub_type' => 'quick_reply',
                'index' => 1,
                'parameters' => [
                    [
                        'type' => 'text',
                        'text' => 'No',
                    ],
                ],
            ],
        ];

        $components = new Component($component_header, $component_body, $component_buttons,$whatsapp_cloud_api);
        $whatsapp_cloud_api->sendTemplate('527121461514', 'sample_issue_resolution', 'en_US', $components); // Language is optional
    }
}
