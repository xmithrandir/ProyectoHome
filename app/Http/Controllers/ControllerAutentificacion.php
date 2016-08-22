<?php

namespace ProyectoV1\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoV1\User;
use Auth;
use Session;
use Redirect;
use ProyectoV1\Http\Requests;
use ProyectoV1\Http\Requests\RequestAutentificacion;

class ControllerAutentificacion extends Controller
{
    public function index()
    {
        return view('Autentificacion.principal');
    }


    public function store (RequestAutentificacion $request)
    {
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']]))
        {
            Session::flash('success','Bienvenido al Sistema.');
            return Redirect::to('/principal');
        }
        else {
            Session::flash('message-error','Usuario no registrado o Password incorrecto.');
            return Redirect::to('/autentificacion');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/autentificacion');
    }

}
