@extends('Plantillas.principal')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">REGISTRO DE NUEVA NOTICIA</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'noticia.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Volanta</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('volanta',null,['required'=>' ','size' => '5x3', 'autocomplete'=>'off', 'placeholder' =>' Nombres ','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Titulo</label>
                        <div class="col-lg-10">
                            {!!Form::text('titulo',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombres ','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Copete</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('copete',null,['required'=>' ','size' => '5x3' , 'autocomplete'=>'off', 'placeholder' =>' Nombres ','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Cuerpo</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('cuerpo',null,['required'=>' ','size' => '7x5' , 'autocomplete'=>'off', 'placeholder' =>' Nombres ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Video</label>
                        <div class="col-lg-10">
                            {!!Form::text('video',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' www.youtube.com ','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="hr-dashed"></div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Imagen</label>
                        <div class="col-lg-10">
                            <input id="input-43" type="file" name="imagen">
                            <div id="errorBlock43" class="help-block"></div>
                        </div>

                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Descripcion</label>
                        <div class="col-lg-4">
                            {!! Form::select('descripcion', $r_descripcion, $attributes = array(),array('class' => 'selectpicker', 'title'=>'Seleccionar...','data-selected-text-format'=>'count')) !!}

                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Usuario</label>
                        <div class="col-lg-4">
                            {{ Form::select('usuario', [
                               Auth::user()->id => Auth::user()->nombre ],$attributes = array(),array('class' => 'selectpicker','data-selected-text-format'=>'count')
                            ) }}


                        </div>
                    </div>


                    <div class="hr-dashed"></div>
                    <div class="form-group">

                        <label for="inputPassword1" class="col-lg-2 control-label">Estado</label>
                        <div class="col-lg-4">
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
                        <label for="inputPassword1" class="col-lg-2 control-label">Estado</label>
                        <div class="col-lg-4">
                        {!!Form::date('fecha', \Carbon\Carbon::now())!!}
                        </div>
                    </div>
                    </div>


                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>

                            <a href="{{ URL::to('usuario') }}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>


                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>
@stop