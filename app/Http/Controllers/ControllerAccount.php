<?php

namespace ProyectoV1\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoV1\User;
use Auth;
use Session;
use Redirect;

use ProyectoV1\Http\Requests;

class ControllerAccount extends Controller
{

    public function index($id)
    {
        $r_user = User::find($id);
        return view('Perfil.principal',['account'=>$r_user]);

    }
    public function update($id, Request $request)
    {
        $c_usuario =User::find($id);
        if ($request->password !="")
        {


                $c_usuario->password = bcrypt($request->confirmpassword);
                $c_usuario->save();


                return Redirect::back()->with('message', 'Contraseña cambiada.');


        }
        else{

            $c_usuario ->nombre       = $request->nombre;
            $c_usuario ->apellidop    = $request->apellidop;
            $c_usuario ->apellidom    = $request->apellidom;
            $c_usuario ->documento    = $request->documento;
            $c_usuario ->direccion    = $request->direccion;
            $c_usuario ->telefono     = $request->telefono;
            $c_usuario ->celular      = $request->celular;
            $c_usuario -> save();

            Session::flash('message', 'Perfil actualizado correctamente.');
            return Redirect::back();
        }

    }

    public function changep($id)
    {
        $r_user = User::find($id);
        return view('Perfil.update',['account'=>$r_user]);
    }


}
