@extends("layouts.app")
@section('display')
    Admin Dash Board
    @endsection
@section('content')
    <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    <div class="row mb-3">
        <div class="col-xl-3 col-sm-6">
            <div class="card bg-success text-white h-100">
                <div class="card-body bg-success">
                    <div class="rotate">
                        <i class="fa fa-list fa-3x"></i>
                    </div>
                    <h6 class="text-uppercase">View application</h6>
                    <h1 class="display-4">134</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-white bg-danger h-100">
                <div class="card-body bg-danger">
                    <div class="rotate">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <h6 class="text-uppercase">View User</h6>
                    <h1 class="display-4">87</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-white bg-info h-100">
                <div class="card-body bg-info">
                    <div class="rotate">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <h6 class="text-uppercase">View Old Students</h6>
                    <h1 class="display-4">125</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-white bg-warning h-100">
                <div class="card-body bg-warning">
                    <div class="rotate">
                        <i class="fa fa-mail-forward fa-3x"></i>
                    </div>
                    <h6 class="text-uppercase">Messages</h6>
                    <h1 class="display-4">36</h1>
                </div>
            </div>
        </div>
    </div>

    @endsection
