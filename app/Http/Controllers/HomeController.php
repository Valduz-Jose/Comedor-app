<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comedore;

class HomeController extends Controller
{
    public function __invoke()
    {
        $comedore = comedore::paginate();
        return view('home', compact('comedore'));
    }
}
