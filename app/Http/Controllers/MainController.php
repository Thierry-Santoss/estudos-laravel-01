<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function initMethod(): string // aki é o tipo de retorno
    {
        return "Hello World"; // o retorno é uma string
        // echo "Hello Word"; // retorno é um void
    }

    public function viewPage(): View 
    {
        return view('home');
    }
}
