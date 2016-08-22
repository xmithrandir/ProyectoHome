@extends('Plantillas.principal')
@section('content')

    <div class="row">
        <div class="col-md-12">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" role = "alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="page-title"><center>{{Session::get('success')}}</center></h4>
                </div>
            @endif

                @if(Session::has('message-error'))
                    <div class="alert alert-warning alert-dismissible" role = "alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="page-title"><center>{{Session::get('message-error')}}</center></h4>
                    </div>
                @endif
            <h2 class="page-title">Principal</h2>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body bk-primary text-light">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">24</div>
                                        <div class="stat-panel-title text-uppercase">New Users</div>
                                    </div>
                                </div>
                                <a href="#" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body bk-success text-light">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">8</div>
                                        <div class="stat-panel-title text-uppercase">Support Tickets</div>
                                    </div>
                                </div>
                                <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body bk-info text-light">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">58</div>
                                        <div class="stat-panel-title text-uppercase">New Orders</div>
                                    </div>
                                </div>
                                <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body bk-warning text-light">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">18</div>
                                        <div class="stat-panel-title text-uppercase">New Comments</div>
                                    </div>
                                </div>
                                <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Recent Oreders</div>
                        <div class="panel-body">
                            <div class="alert alert-dismissible alert-success">
                                <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
                                <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@stop