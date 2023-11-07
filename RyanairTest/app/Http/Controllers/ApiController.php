<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');
        $usuariosArray = $usuarios->json();
        return view('index', compact('usuariosArray'));
    }
}
