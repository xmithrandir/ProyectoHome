<?php

namespace ProyectoV1\Http\Controllers;

use Illuminate\Http\Request;

use ProyectoV1\Descripcion;
use ProyectoV1\Estado;
use Auth;
use Session;
use Redirect;
use ProyectoV1\Http\Requests;

class ControllerDescripcion extends Controller
{
    public function index()
    {



        $r_descripcion = Descripcion::All();
        $r_estado=Estado::All();

        return view('Descripcion.principal',compact('r_descripcion','r_estado'));
    }
    public function create()
    {
        return view('Descripcion.create');
    }

    public function store(Request $request)
    {
        $c_descripcion = new Descripcion;
        $c_descripcion ->descripcion    = $request->descripcion;
        $c_descripcion ->estado         = $request->estado;
        $c_descripcion -> save();


        Session::flash('message', 'Descripcion registrada correctamente en la Base de Datos.');
        return Redirect::to('/descripcion');
    }


    public function edit($id)
    {
        $v_descripcion =Descripcion::find($id);

        return view('Descripcion.update',['descripcions'=>$v_descripcion]);
    }

    public function update($id, Request $request)
    {

        $c_descripcion =Descripcion::find($id);
        $c_descripcion ->descripcion    = $request->descripcion;
        $c_descripcion ->estado         = $request->estado;
        $c_descripcion -> save();

        Session::flash('message', 'Descripcion actualizada correctamente en la Base de Datos.');
        return Redirect::to('/descripcion');

    }


}
