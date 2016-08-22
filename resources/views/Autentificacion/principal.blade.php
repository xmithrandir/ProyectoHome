<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ URL::asset('img/icon.png') }}">
    <title>Autentificacion</title>


    <!-- Font awesome -->

    {!!Html::style('css/font-awesome.min.css')!!}
    <!-- Sandstone Bootstrap CSS -->
    {!!Html::style('css/bootstrap.min.css')!!}
    <!-- Bootstrap Datatables -->
    {!!Html::style('css/dataTables.bootstrap.min.css')!!}
    <!-- Bootstrap social button library -->
    {!!Html::style('css/bootstrap-social.css')!!}
    <!-- Bootstrap select -->
    {!!Html::style('css/bootstrap-select.css')!!}
    <!-- Bootstrap file input -->
    {!!Html::style('css/fileinput.min.css')!!}
    <!-- Awesome Bootstrap checkbox -->
    {!!Html::style('css/awesome-bootstrap-checkbox.css')!!}
    <!-- Admin Stye -->
    {!!Html::style('css/style.css')!!}

     <!--[if lt IE 9]>
    {!!Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')!!}
    {!!Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')!!}
<![endif]-->

</head>

<body>

<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
<div class="form-content">
<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center text-bold text-light mt-4x">Bienvenid@s</h1>
        <div class="well row pt-2x pb-3x bk-light">
            <div class="col-md-8 col-md-offset-2">
                {!!Form::open(['route'=>'autentificacion.store','method'=>'POST', 'class'=>'mt'])!!}

                    <label for="" class="text-uppercase text-sm">Email:</label>
                        {!!Form::email('email',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Email@ejemplo.com ','class'=>'form-control mb'])!!}

                    <label for="" class="text-uppercase text-sm">Contraseña:</label>
                <input type="password" placeholder="Password" class="form-control mb" name="password">
                <div class="checkbox checkbox-circle checkbox-info">
                        <input id="checkbox7" type="checkbox" checked>
                        <label for="checkbox7">
                            Recordar contraseña
                        </label>
                    </div>
                        @if(Session::has('message-error'))
                            <div class="alert alert-danger alert-dismissible" role = "alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <center>{{Session::get('message-error')}}</center>
                            </div>
                        @endif
                    <button class="btn btn-primary btn-block" type="submit">AUTENTIFICAR</button>

                {!!Form::close()!!}
            </div>
        </div>
        <div class="text-center text-light">
            <a href="#" class="text-light">¿Olvide mi password?</a>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- Loading Scripts -->
{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap-select.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/jquery.dataTables.min.js')!!}
{!!Html::script('js/dataTables.bootstrap.min.js')!!}
{!!Html::script('js/Chart.min.js')!!}
{!!Html::script('js/fileinput.js')!!}
{!!Html::script('js/chartData.js')!!}
{!!Html::script('js/main.js')!!}

</body>

</html>