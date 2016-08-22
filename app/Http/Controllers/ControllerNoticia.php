<?php

namespace ProyectoV1\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoV1\Descripcion;
use ProyectoV1\User;
use ProyectoV1\Estado;
use ProyectoV1\Noticia;
use Auth;
use Session;
use Redirect;
use ProyectoV1\Http\Requests;

class ControllerNoticia extends Controller
{
  public function index()
  {
      $r_usuario = User::All();
      $r_estado=Estado::All();
      $r_noticia =Noticia::All();

      return view('Noticia.principal',compact('r_usuario','r_estado', 'r_noticia'));
  }

    public function create()
    {
        $r_descripcion = Descripcion::lists('descripcion', 'id');
        return view('Noticia.create',compact('r_descripcion'));
    }

    public function store(Request $request)
    {
        $c_noticia =new Noticia;
        $c_noticia ->volanta       = $request->volanta;
        $c_noticia ->titulo        = $request->titulo;
        $c_noticia ->copete        = $request->copete;
        $c_noticia ->cuerpo        = $request->cuerpo;
        $c_noticia ->fecha         = $request->fecha;
        $c_noticia ->imagen        = $request->imagen;
        $c_noticia ->video         = $request->video;
        $c_noticia ->descripcion   = $request->descripcion;
        $c_noticia ->usuario       = $request->usuario;
        $c_noticia ->estado        = $request->estado;
        $c_noticia->save();

        Session::flash('message', 'Noticia registrada correctamente.');
        return Redirect::to('/noticia');
    }

    public function edit($id)
    {
        $v_noticia =Noticia::find($id);
        $r_usuario = User::All();
        $r_descripcion = Descripcion::All();

        return view('Noticia.update',['noticias'=>$v_noticia],compact('r_descripcion', 'r_usuario'));
    }

    public function update($id, Request $request)
    {
        $c_noticia =Noticia::find($id);
        if($request->imagen =="")
        {
            $c_noticia ->volanta       = $request->volanta;
            $c_noticia ->titulo        = $request->titulo;
            $c_noticia ->copete        = $request->copete;
            $c_noticia ->cuerpo        = $request->cuerpo;
            $c_noticia ->video         = $request->video;
            $c_noticia ->descripcion   = $request->descripcion;
            $c_noticia ->estado        = $request->estado;
            $c_noticia -> save();

            Session::flash('message', 'Noticia actualizada correctamente en la Base de Datos.');
            return Redirect::to('/noticia');
        }
        else
        {
            $c_noticia ->volanta       = $request->volanta;
            $c_noticia ->titulo        = $request->titulo;
            $c_noticia ->copete        = $request->copete;
            $c_noticia ->cuerpo        = $request->cuerpo;
            $c_noticia ->imagen        = $request->imagen;
            $c_noticia ->video         = $request->video;
            $c_noticia ->descripcion   = $request->descripcion;
            $c_noticia ->estado        = $request->estado;
            $c_noticia -> save();

            Session::flash('message', 'Noticia actualizada correctamente en la Base de Datos.');
            return Redirect::to('/noticia');
        }



    }

}
