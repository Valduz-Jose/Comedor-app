<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function __invoke()
    {
        return view('Registro');
    }
}
