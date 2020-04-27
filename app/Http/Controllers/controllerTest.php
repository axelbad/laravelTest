<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerTest extends Controller
{
    public function __construct()
    {
        
    }

    public function provaRoute($param="")
    {
        echo "Stampa del param $param";
    }
}
