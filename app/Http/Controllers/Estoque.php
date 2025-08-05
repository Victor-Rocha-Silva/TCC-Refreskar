<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estoque extends Controller
{
    function estoque()
    {
        return view("estoque");
    }
}
