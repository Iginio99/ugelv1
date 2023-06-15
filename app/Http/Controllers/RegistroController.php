<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function terminos()
    {
        return view('/terminos');
    }

    public function clausula()
    {
        return view('/clausula');
    }
}
