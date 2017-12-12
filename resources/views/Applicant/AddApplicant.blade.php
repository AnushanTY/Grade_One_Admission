@extends('layouts.app')
@section('content')

    <div >
        <h2 ><center><font color="purple" face="verdana"><b>Register new applicant</b></font></center></h2><br/>
    </div>
    <div class="container" >

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>

        <form role="form"  class="form-control form-group form-line" method="post" action="{{route('Applicant.AddApplicantData')}}" >
            {{csrf_field()}}
            <div class="col-sm-5 form-group ">
                <label class="control-label col-sm-5" ><B>Application ID</B></label>

                    <input type="text" name="Application_ID" id=Application_ID class="form-control" required>

            </div>

            <label class="control-label col-sm-2"><B>Name</B></label>

            <div class="form form-group col-sm-5">
                <input type="text" class="form-control " name="Fi_name" id="Fi_name" placeholder="First Name"><br/>

                <input type="text" class="form-control" name="La_name" id="La_name" placeholder="Last Name">
            </div><br/>
            <div class="form-group col-sm-5">
            <label class="control-label col-sm-2"><B>Gender</B></label>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input form-control" type="radio"  name="gender" id="gender" value="Male" >
                    Male
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input form-control" type="radio" name="gender" id="gender" value="Female">
                    Female
                </label>
            </div>
            </div>


            <div class="form-group col-sm-5">
                <label class="control-label col-sm-5" ><B>Date Of Birth</B></label>


                    <input type="date" class="form-control" name="DOM" id="DOM" placeholder="Year">



            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >District</label>
                <div class="col-sm-5">
                    <select class="custom-select mb-5 mr-sm-5 mb-sm-0" name="District" required id="District">
                        <option selected>Choose.....</option>
                        <option>Ampara</option>
                        <option>Anuradhapura</option>
                        <option>Badulla</option>
                        <option>Baticaloa</option>
                        <option>Colombo</option>
                        <option>Galle</option>
                        <option>Gampaha</option>
                        <option>Hambantota</option>
                        <option>Jaffna</option>
                        <option >Kalutara</option>
                        <option >Kandy</option>
                        <option >Kegalle</option>
                        <option >Kilinochchi</option>
                        <option>Kurunegalle</option>
                        <option>vavuniya</option>
                        <option >Mannar</option>
                        <option >Matara</option>
                        <option >Matale</option>
                        <option>Monaragala</option>
                        <option>Mullaitivu</option>
                        <option>NuwaraEliya</option>
                        <option >Polonnaruwa</option>
                        <option >Puttalam</option>
                        <option>Ratnapura</option>
                        <option>Trincomalee</option>


                    </select>
                </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-3 ">
                <button  type="submit" class="f btn btn-primary form-control"><b>Next</b></button>
            </div>
                {{--<div class="form-group col-sm-2 ">--}}
                    {{--<a href="{{route('Applicant.ApplicantGaurdian')}}" class="f btn btn-primary form-control"><b>Next</b></a>--}}
                {{--</div>--}}
            </div>




        </form>
    </div>
@endsection
<script>

</script>