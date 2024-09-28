<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Hallo selamat datang di controller Coba, dan metod index";
    }

    public function about($nama = 'icam', $umur = 20)
    {
        echo "coba/about, hallo nama saya $nama saya berusia $umur,saya mengambil nama ini di sebuah variable";
    }
}
