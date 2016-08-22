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

            <h2 class="page-title">PANEL DE ADMINISTRACION DE Departamentos</h2>
        </div>
    </div>


    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">Departamentos</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="right">

                        <a href="{{ URL::to('noticia/create') }}" class="btn btn-linkedin btn-sm"><i class="fa fa-newspaper-o"></i> Nueva Noticia</a>
                        <input type="text" class="input-sm">

                        <a href="#" class="btn btn-tumblr btn-sm"><i class="fa fa-search"></i> Buscar</a>
                    </div>
                    <br>

                    <table class="table table-striped">
                        <thead>
                        <tr class="warning">
                            <th width="5%">#</th>
                            <th width="35%">Titulo</th>
                            <th width="20%">Usuario</th>
                            <th width="15%">Video</th>
                            <th width="10%">Estado</th>
                            <th width="15%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($r_noticia as $not): ?>
                        <tr>
                            <td>{{$not->id}}</td>
                            <td>{{$not->titulo}}</td>
                            <td>
                                <?php foreach ($r_usuario as $user):?>
                                @if($not->usuario == $user->id)
                                    {{$user->nombre}} {{$user->apellidop}}
                                @endif
                                <?php endforeach;?>

                            </td>
                            <td>

                                <a href="{{$not->video}} " target="_blank" class="btn btn-danger btn-circle btn-xs" title="Video"> <i class="fa fa-youtube "></i></a>
                            </td>
                            <td>
                                <?php foreach ($r_estado as $estate):?>
                                @if($user->estado == $estate->id)
                                    <a href="#" class="btn btn-{{$estate->state}} btn-sm">{{$estate->descripcion}}</a>
                                @endif
                                <?php endforeach;?>

                            </td>
                            <td>
                                <a href="{{ URL::to('noticia/edit', $parameters = $not->id) }}" class="btn btn-info btn-sm" title="Editar"> <i class="fa fa-edit"></i> </a>
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
