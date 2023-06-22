<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Netflie\WhatsAppCloudApi\Message\OptionsList\Row;
use Netflie\WhatsAppCloudApi\Message\OptionsList\Section;
use Netflie\WhatsAppCloudApi\Message\OptionsList\Action;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

class ListMessageController extends Controller
{
    public function listMessage(){

        $whatsapp_cloud_api = new WhatsAppCloudApi([
            'from_phone_number_id' => '107197942400428',
            'access_token' => 'EAAUzZBouhua8BALU9j16xZCxiEt1zKBj1ZB6tfBhFmu8D5HN31RZCIzaVZBZC4uLdAJHiHnNGb9GwfJZBgMHPdhcZCpjVntUR1Rrj1mlHZCyrDUhUO5wIPkXveLrYfPcblt7snKYJenhAN6JOKSyGQNhqk0tZBPhQEDmqoZCFTANJuzfG42hNXlggHj',
        ]);

        $rows = [
            new Row('1', '⭐️', "Solicitar servicios"),
            new Row('2', '⭐⭐️', "Ubicar tienda"),
            new Row('3', '⭐⭐⭐️', "Resolver dudas"),
            new Row('4', '⭐⭐️⭐⭐', "Estado de cuenta"),
            new Row('5', '⭐⭐️⭐⭐⭐️', "Seguimiento de Alumnos"),
        ];
        $sections = [new Section('Stars', $rows)];
        $action = new Action('Ver opcions', $sections);
        
        
        $whatsapp_cloud_api->sendList(
            '527121461514',
            'Dime,¿En que te puedo ayudar?',
            'Seleccione las opciones, para poder ayudarlo',
            'Gracias por tu tiempo!',
            $action
        );
    }
}
