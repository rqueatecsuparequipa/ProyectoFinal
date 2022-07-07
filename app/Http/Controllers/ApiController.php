<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function api2($celular)
    {
        $data = [
            "app" => [
                "id" =>  "51962159729",
                "time" => "1656210571",
                "data" => [
                    "recipient" => [
                        "id" => "51".$celular,
                    ],
                    "message" => [
                        [
                            "time" => "1656210571",
                            "type" => "text",
                            "value" => "prueva larcel numero"

                        ]

                    ]
                ]
            ]
        ];
        $response = Http::post('https://whapi.io/api/send',$data)->json();
        return $response;


    }

    public function api3($celular)
    {
        $mensaje = 'prueva final  de test de codigo laravel y python #todo corecto ';
        $url = 'http://127.0.0.1:3000/mensaje?celular='.$celular.'&mensaje='.$mensaje;
        $response = Http::post($url);
        return $response;


    }
    public function apipro()
    {
        $nombre ="usuario";
        $correo= "usu@gmail.com";
        $contra="53245254";
        $url = 'http://127.0.0.1:5000/mensaje';
        $response = Http::get($url);
        return $response;


    }

    public function apipost()
    {
        $nombre ="manuel";
        $correo= "manuel@gmail.com";
        $contra="1111111111111";
        $url = 'http://127.0.0.1:5000/cargar?nombre='.$nombre.'&correo='.$correo.'&contra='.$contra;
        $response = Http::post($url);
        return $response;


    }



}
