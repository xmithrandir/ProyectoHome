<?php

namespace ProyectoV1\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoV1\User;
use ProyectoV1\Estado;
use ProyectoV1\Permiso;
use Auth;
use Session;
use Redirect;
use ProyectoV1\Http\Requests;

class ControllerUsuario extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('auth',['only'=>'index']);
        $this->middleware('admin');
    }

    public function index()
    {



        $r_usuario = User::All();
        $r_estado=Estado::All();
        $r_permiso =Permiso::All();

        return view('Usuario.principal',compact('r_usuario','r_estado', 'r_permiso'));
    }

    public function create()
    {
        return view('Usuario.create');
    }

    public function store(Request $request)
    {
        $c_usuario = new User;
        $c_usuario ->nombre       = $request->nombre;
        $c_usuario ->apellidop    = $request->apellidop;
        $c_usuario ->apellidom    = $request->apellidom;
        $c_usuario ->documento    = $request->documento;
        $c_usuario ->direccion    = $request->direccion;
        $c_usuario ->email        = $request->email;
        $c_usuario ->telefono     = $request->telefono;
        $c_usuario ->celular      = $request->celular;
        $c_usuario ->permiso      = $request->permiso;
        $c_usuario ->estado       = $request->estado;
        $c_usuario ->password     = bcrypt($request->email);
        $c_usuario -> save();


        Session::flash('message', 'Usuario registrado correctamente.');
        return Redirect::to('/usuario');
    }

    public function edit($id)
    {
        $v_user =User::find($id);

        return view('Usuario.update',['users'=>$v_user]);
    }

    public function update($id, Request $request)
    {

        $c_usuario =User::find($id);
        $c_usuario ->nombre       = $request->nombre;
        $c_usuario ->apellidop    = $request->apellidop;
        $c_usuario ->apellidom    = $request->apellidom;
        $c_usuario ->documento    = $request->documento;
        $c_usuario ->direccion    = $request->direccion;
        $c_usuario ->telefono     = $request->telefono;
        $c_usuario ->celular      = $request->celular;
        $c_usuario ->permiso      = $request->permiso;
        $c_usuario ->estado       = $request->estado;
        $c_usuario -> save();

        Session::flash('message', 'Usuario actualizado correctamente en la Base de Datos.');
        return Redirect::to('/usuario');

    }
}
