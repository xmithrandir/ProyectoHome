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

            <center><h2 class="page-title">Usuario {{$account->nombre}} {{$account->apellidop}} </h2></center>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-info">
                <div class="panel-heading">MI PERFIL</div>
                <div class="panel-body">
                    {!!Form::model($account,['route'=>['account.update', $account->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-4 control-label">Email</label>
                        <div class="col-lg-6">
                            {!!Form::email('email',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Ejemplo@ejemplo.com','class'=>'form-control','readonly'])!!}
                        </div>
                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-4 control-label">Antiguo Password</label>
                        <div class="col-lg-6">
                            <input type="password" required placeholder="Password" class="form-control mb" name="password">
                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-4 control-label">Nuevo Password</label>
                        <div class="col-lg-6">
                            <input type="password" required placeholder="Password" class="form-control mb" name="newpassword" id="newpassword">
                        </div>

                    </div>

                    <div class="form-group" id="valida">
                        <label for="inputPassword1" class="col-lg-4 control-label">Verifique Password</label>
                        <div class="col-lg-6">
                            <input type="password"  required placeholder="Password" class="form-control mb" name="confirmpassword" id="confirmpassword" onkeyup="checkPass(); return false;">
                            <span id="confirmMessage" class="confirmMessage"></span>

                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Cambiar Password</button>

                            <a href="{{ URL::to('principal') }}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>


                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>




@stop