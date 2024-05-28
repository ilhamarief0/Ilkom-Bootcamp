<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function tambah()
    {
        $c = 10;
        $d = 20;

        return $c + $d;
    }
    public function bagi()
    {
        $c = 10;
        $d = 20;

        return $c / $d;
    }
    public function kali()
    {
        $c = 10;
        $d = 20;

        return $c * $d;
    }
    public function kurang()
    {
        $c = 10;
        $d = 20;

        return $c - $d;
    }
}
