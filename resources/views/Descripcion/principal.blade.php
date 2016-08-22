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

            <h2 class="page-title">PANEL DE ADMINISTRACION DE DESCRIPCION</h2>
        </div>
    </div>


    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">DESCRIPCIONES</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="right">

                        <a href="{{ URL::to('descripcion/create') }}" class="btn btn-linkedin btn-sm"><i class="fa fa-users"></i> Nueva Descripcion</a>
                        <input type="text" class="input-sm">

                        <a href="#" class="btn btn-tumblr btn-sm"><i class="fa fa-search"></i> Buscar</a>
                    </div>
                    <br>

                    <table class="table table-striped">
                        <thead>
                        <tr class="warning">
                            <th width="10%">#</th>
                            <th width="40%">Descripcion</th>
                            <th width="30%">Estado</th>
                            <th width="20%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($r_descripcion as $desc): ?>
                        <tr>
                            <td>{{$desc->id}}</td>
                            <td>{{$desc->descripcion}}</td>
                            <td>
                                <?php foreach ($r_estado as $estate):?>
                                @if($desc->estado == $estate->id)
                                    <a href="#" class="btn btn-{{$estate->state}} btn-sm">{{$estate->descripcion}}</a>
                                @endif
                                <?php endforeach;?>

                            </td>
                            <td>
                                <a href="{{ URL::to('descripcion/edit', $parameters = $desc->id) }}" class="btn btn-info btn-sm" title="Editar"> <i class="fa fa-edit"></i> </a>
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
