<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title> Grade One Addmission</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

    <style type="text/css">
        #personal_information,
        #company_information{
            display:none;
        }
    </style>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>




    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">



</head>
<body>

<nav class="navbar fixed-top navbar-expand-md navbar-dark  mb-3" style="background: #6ffff8" >
    <div class="flex-row d-flex">
        <a class="text-uppercase text-blod " style="text-decoration-color: #0f0f0f; text-decoration-style: double" >Grade One Admissions</a>
        <button type="button" class="navbar-toggler" data-toggle="offcanvas" title="Toggle responsive left sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-uppercase text-success " href="#" >Home </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <li class="dropdown">
            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
            @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="sr-only"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}" style="background: #ff374a"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                @endguest
            </li>

            </li>


        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="list-group " >
                <li class="sidebar-search list-group-item">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>


                    <!-- /input-group -->
                </li>

                <li  class="list-group-item"><a class="nav-link text-success fa fa-dashboard" href="{{route('Admin')}}">  Dashboard</a></li>
                <li class="list-group-item">
                    <a class="nav-link text-success fa fa-indent" href="#submenu1" data-toggle="collapse" data-target="#submenu1">  Reports▾</a>
                    <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="">Applicant Detail</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Old Student Details</a></li>
                    </ul>
                </li>
                <li class="nav-item list-group-item"><a class="nav-link text-success fa fa-eye fa-1x" href="{{route('Applicant.ViewApp')}}">  View Applicant</a></li>
                <li class="nav-item list-group-item">
                    <a class="nav-link text-success fa fa-bookmark-o" href="#submenu3" data-toggle="collapse" data-target="#submenu3">  Add New Application▾</a>
                    <ul class="list-unstyled flex-column pl-3 collapse" id="submenu3" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{route('Applicant.AddApplicant')}}">Applicant Basic Detail</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('Applicant.ApplicantGaurdian')}}">Applicant Gaurdian Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('Applicant.ApplicantContact')}}">Applicant Contack Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('Applicant.ApplicantResidence')}}">Applicant Residasial Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('Applicant.AppliedSchoolInf')}}">Applicant Applied School Details</a></li>

                    </ul>
                </li>
                <li class="nav-item list-group-item"><a class="nav-link text-success fa fa-eye fa-1x" href="{{route('School.Index')}}">  View School</a></li>
                <li class="nav-item list-group-item">
                    <a class="nav-link  text-success fa fa-university" href="#submenu2" data-toggle="collapse" data-target="#submenu2">  Add New School▾</a>
                    <ul class="list-unstyled flex-column pl-3 collapse" id="submenu2" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href=" {{route('School.AddNewSchool')}}">School Detail</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('School.AddSchoolContackInf')}}">School Contack Details</a></li>
                    </ul>
                </li>

                <li class="nav-item list-group-item"><a class="nav-link text-success fa fa-eye fa-1x" href="{{route('oldStudent.viewOldStudent')}}">  View Old Student Detail</a></li>
                <li class="nav-item list-group-item"><a class="nav-link text-success fa fa-user" href="{{route('oldStudent.AddOldstudent')}}">  Add Old Student Detail</a></li>

                <li  class="nav-item list-group-item "><a class="nav-link text-success fa fa-eye fa-1x" href="{{route('User.viewUser')}}">  View User</a></li>
                <li class="nav-item list-group-item"><a class="nav-link text-success fa fa-user" href="{{ route('User.AddNewUser') }}">  Add New User</a></li>

                <li class="nav-item list-group-item"><a class="nav-link text-success fa fa-eye fa-1x" href="{{route('DistanceTable.ViewDistanceDetail')}}">  View Distance Detail</a></li>
                <li class="nav-item list-group-item"><a class="nav-link text-success fa fa-home" href="{{ route('DistanceTable.AddnewDistanceDetail') }}">  Add Distance Detail</a></li>

            </ul>

        </div>
        <!--/col-->

        <div class="content col-md-9 col-lg-10 main">

            <h1 class="display-4 d-none d-sm-block">
               @yield('display')
            </h1>
            @yield('content')
        </div>
    </div>
<div class="footer">
    <h2 style="color: #00BE67; text-align: center">2017@Illusion</h2>
</div>
</div>


<!--/.container-->
</body>


</html>

