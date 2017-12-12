@extends('layouts.app')


@section('content')

    <div >
        <h2 ><center><font color="purple" face="verdana"><b>Add Old Students Detail</b></font></center></h2><br/>
    </div>
    <div class="container" >

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>

        <form role="form"  class="form-control form-group form-line" method="post" action="{{route('OldStudent.AddData')}}" >
            {{csrf_field()}}
            <div class="col-sm-5 form-group ">
                <label class="control-label col-sm-5" ><B>Student Index NO</B></label>

                <input type="text" name="StudentIndexNO" id=StudentIndexNO class="form-control" required>

            </div>

            <div class="col-sm-5 form-group ">
                <label class="control-label col-sm-5" ><B>School ID</B></label>

                <input type="text" name="SchoolID" id=SchoolID class="form-control" required>

            </div>

            <div class="col-sm-5 form-group ">
                <label class="control-label col-sm-5" ><B>Status</B></label>

                <input type="text" name="Status" id=Status class="form-control" required>

            </div>

            <div class="col-sm-5 form-group ">
                <label class="control-label col-sm-5" ><B>Admission Date</B></label>

                <input type="date" name="AdmissionDate" id=AdmissionDate class="form-control" required>

            </div>

            <div class="col-sm-5 form-group ">
                <label class="control-label col-sm-5" ><B>Leaving Date</B></label>

                <input type="date" name="LeavingDate" id=LeavingDate class="form-control" required>

            </div>





            <div class="row">
                <div class="form-group col-sm-3 ">
                    <button type="submit" class="f btn btn-primary form-control"><b>Submit</b></button>
                </div>

            </div>




        </form>
    </div>
@endsection