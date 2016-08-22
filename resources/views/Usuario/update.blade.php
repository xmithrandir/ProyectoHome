@extends('Plantillas.principal')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">EDITAR EL USUARIO : {{$users->nombre}} {{$users->apellidop}} </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-warning">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::model($users,['route'=>['usuario.update', $users->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            {!!Form::text('nombre',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombres ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Apellido Paterno</label>
                        <div class="col-lg-4">
                            {!!Form::text('apellidop',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellido Paterno','class'=>'form-control'])!!}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Apellido Materno</label>
                        <div class="col-lg-4">
                            {!!Form::text('apellidom',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellido Materno','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Documento</label>
                        <div class="col-lg-4">
                            {!!Form::text('documento',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Documento Nacional de Identidad','class'=>'form-control'])!!}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Direccion</label>
                        <div class="col-lg-4">
                            {!!Form::text('direccion',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Direccion','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            {!!Form::email('email',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Ejemplo@ejemplo.com','class'=>'form-control','readonly'])!!}
                        </div>
                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Telefono</label>
                        <div class="col-lg-4">
                            {!!Form::text('telefono',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>'Telefono','class'=>'form-control'])!!}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Celular</label>
                        <div class="col-lg-4">
                            {!!Form::text('celular',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>'Celular','class'=>'form-control'])!!}




                        </div>

                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Permiso</label>
                        <div class="col-lg-10">
                            <div class="col-sm-4">
                                <div class="radio radio-info radio-inline">
                                    {!! Form::radio('permiso', '1', true,['id'=>'inlineRadio1']) !!}
                                    <label for="inlineRadio1"> Administrador </label>
                                </div>
                                <div class="radio radio-inline">
                                    {!! Form::radio('permiso', '2', false,['id'=>'inlineRadio2']) !!}
                                    <label for="inlineRadio2"> Editor </label>
                                </div>
                            </div>
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
                                <div class="radio radio-warning radio-inline">
                                    {!! Form::radio('estado', '3', false,['id'=>'Radio3']) !!}
                                    <label for="Radio3"> Pendiente </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Editar</button>

                            <a href="{{ URL::to('usuario') }}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>


                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>
@stop