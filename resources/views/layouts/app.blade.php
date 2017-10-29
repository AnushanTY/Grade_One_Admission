<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title> Grade One Addmission</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">



</head>
<body>

<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
    <div class="flex-row d-flex">
        <a class="navbar-brand" href="#" title="Free Bootstrap 4 Admin Template">Grade One Admissions</a>
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
                <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">Lougout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav flex-column pl-1">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Reports▾</a>
                    <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="">Applicant Detail</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Old Student Details</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Add New Application</a></li>
                <li class="nav-item"><a class="nav-link" href="#">View School</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('School.AddNewSchool')}}">Add New School</a></li>
                <li class="nav-item"><a class="nav-link" href="#">View User</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add New User</a></li>

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
</div>


<!--/.container-->
</body>


<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
<script src="{{ asset('js/scripts.js') }}"></script>


</html>

