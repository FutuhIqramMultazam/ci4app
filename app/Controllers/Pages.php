<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Home Page"
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            "title" => "Page About",
            "nama" => "Futuh Iqram Multazam"
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            "title" => "Contact",
            "alamat" => [
                [
                    "nama" => "Futuh Iqram multazam",
                    "usia" => 20,
                    "pekerjaan" => "FullStack",
                    "kota" => "Garut",
                    "kec" => "leuwigoong",
                    "des" => "SindangSari",
                    "kamp" => "Cibudug"
                ],
                [
                    "nama" => "Fadilah Fatwa",
                    "usia" => 23,
                    "pekerjaan" => "Guru TK",
                    "kota" => "Garut",
                    "kec" => "Cibiuk",
                    "des" => "Cibiuk Kaler",
                    "kamp" => "SirnaRasa"
                ]
            ]
        ];

        return view("pages/contact", $data);
    }
}
