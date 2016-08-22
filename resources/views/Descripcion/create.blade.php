@extends('Plantillas.principal')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">REGISTRO DE NUEVA DESCRIPCION</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'descripcion.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Descripcion</label>
                        <div class="col-lg-10">
                            {!!Form::text('descripcion',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">

                        <label for="inputPassword1" class="col-lg-2 control-label">Estado</label>
                        <div class="col-lg-10">
                            <div class="col-sm-10">
                                <div class="radio radio-success radio-inline">
                                    {!! Form::radio('estado', '1', true,['id'=>'Radio1']) !!}
                                    <label for="Radio1"> Activo </label>
                                </div>
                                <div class="radio radio-danger radio-inline">
                                    {!! Form::radio('estado', '2', false,['id'=>'Radio2']) !!}
                                    <label for="Radio2"> Inactivo </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>

                            <a href="{{ URL::to('descripcion') }}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>


                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>
@stop