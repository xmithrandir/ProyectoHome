@extends('Plantillas.principal')
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <center>{{Session::get('message')}}</center>
        </div>
    @endif


    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">PANEL DE ADMINISTRACION DE USUARIOS</h2>
        </div>
    </div>


    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">USUARIOS</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="right">

                        <a href="{{ URL::to('usuario/create') }}" class="btn btn-linkedin btn-sm"><i class="fa fa-users"></i> Nuevo Usuario</a>
                        <input type="text" class="input-sm">

                        <a href="#" class="btn btn-tumblr btn-sm"><i class="fa fa-search"></i> Buscar</a>
                    </div>
                    <br>

                    <table class="table table-striped">
                        <thead>
                        <tr class="warning">
                            <th width="5%">#</th>
                            <th width="35%">Nombre y Apellido</th>
                            <th width="25%">Email</th>
                            <th width="10%">Permiso</th>
                            <th width="10%">Estado</th>
                            <th width="15%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($r_usuario as $user): ?>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->nombre}} {{$user->apellidop}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <?php foreach ($r_permiso as $permition):?>
                                @if($user->permiso == $permition->id)
                                     {{$permition->descripcion}}
                                @endif
                                <?php endforeach;?>

                            </td>
                            <td>
                                <?php foreach ($r_estado as $estate):?>
                                    @if($user->estado == $estate->id)
                                        <a href="#" class="btn btn-{{$estate->state}} btn-sm">{{$estate->descripcion}}</a>
                                    @endif
                               <?php endforeach;?>

                            </td>
                            <td>
                                <a href="{{ URL::to('usuario/edit', $parameters = $user->id) }}" class="btn btn-info btn-sm" title="Editar"> <i class="fa fa-edit"></i> </a>
                                <a href="#" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-user-times"></i> </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>


                        </tbody>
                    </table>

            </div>
        </div>
    </div>
    </div>



@stop



