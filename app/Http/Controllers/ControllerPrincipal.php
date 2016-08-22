<?php

namespace ProyectoV1\Http\Controllers;

use Illuminate\Http\Request;

use ProyectoV1\Http\Requests;

class ControllerPrincipal extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['only'=>'index']);
    }
    public function index()
    {
        return view('Principal.principal');
    }
}
