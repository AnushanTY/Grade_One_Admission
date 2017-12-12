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
            <div class="card  text-white h-100" >

                <div class="card-body " style="background: #72ffe6">
                    <div class="rotate">
                        <i class="fa fa-list fa-3x"></i>
                    </div>
                    <a href="{{route('Applicant.ViewApp')}}"> <h6 class="text-uppercase" style="text-color:#ffffff;">View application</h6></a>
                   <h1 class="display-4">134</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-white  h-100">
                <div class="card-body " style="background: #ffb030">
                    <div class="rotate">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <a href="{{route('User.viewUser')}}"><h6 class="text-uppercase">View User</h6></a>
                   <h1 class="display-4">87</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-white  h-100">
                <div class="card-body " style="background: #0bff9e">
                    <div class="rotate">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <a href="{{route('oldStudent.viewOldStudent')}}"><h6 class="text-uppercase">View Old Students</h6></a>
                    <h1 class="display-4">125</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-white  h-100">
                <div class="card-body "style="background: #ff94e9">
                    <div class="rotate">
                        <i class="fa fa-bookmark fa-3x"></i>
                    </div>
                    <a href="{{route('School.Index')}}"><h6 class="  text-uppercase">View School</h6></a>
                    <h1 class="display-4">36</h1>
                </div>
            </div>
        </div>
    </div>

    @endsection
