<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\Cliente;

class prestamoController extends Controller
{
    public function index()
    {
        return view('prestamo.index');
    }

    
}