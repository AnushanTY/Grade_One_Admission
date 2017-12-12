@extends('layouts.app')
@section('content')
    <div >
        <h2 ><center><font color="purple" face="verdana"><b>Add New School</b></font></center></h2><br/>

    </div>
    <div class="container">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>

        <form role="form"  class="form-control form-group" method="post" action="{{route('School.AddSchoolData')}}" >
            {{ csrf_field() }}


            <div class="form-group ">
                <label class="control-label col-sm-2" ><B>School ID</B></label>
                <div class="col-sm-5">
                    <input type="text" name="School_ID" id=School_ID class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >School Name</label>
                <div class="col-sm-5">
                    <input type="text" name="School_Name" id="School_Name" class="form-control" required></input>
                </div>
            </div>



            <div class="form-group">
                <label class="control-label col-sm-2" >Address</label>
                <div class="col-sm-5">
                    <input type="text" name="Address1" id="Address1" class="form-control"placeholder="Address line 1" required></input>
                </br>

                    <input type="text" name="Address2" id="Address2" class="form-control" placeholder="Address line 1" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >District</label>
                <div class="col-sm-5">
                    <select class="custom-select mb-5 mr-sm-5 mb-sm-0" required name="District" id="District">
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

            <div class="form-group">
                <label class="control-label col-sm-2" > Postal Code</label>
                <div class="col-sm-5">
                    <input type="number" name="Postal_Code" id="Postal_Code" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Student Intake Count</label>
                <div class="col-sm-5">
                    <input type="number" name="Student_Intake_Count" id="Student_Intake_Count" required class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >School Grade</label>
                <div class="col-sm-5">
                    <select class="custom-select mb-5 mr-sm-5 mb-sm-0" name="School_Grade" id="School_Grade">
                        <option selected>Choose...</option>
                        <option>One-AB</option>
                        <option>One-C</option>
                        <option>Type-A</option>
                        <option>Type-C</option>

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-3 ">
                    <button type="submit" class="f btn btn-primary form-control"><b>Submit</b></button>
                </div>
                <div class="form-group col-sm-2 ">
                    <a href="{{route('School.AddSchoolContackInf')}}" class="f btn btn-primary form-control"><b>Next</b></a>
                </div>
            </div>




        </form>

    </div>



@endsection