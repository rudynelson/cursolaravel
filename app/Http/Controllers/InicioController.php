<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    function index()
    {
    	return view('layouts.admin');
    }
}
