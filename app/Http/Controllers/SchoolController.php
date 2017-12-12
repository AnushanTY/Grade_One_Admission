<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;




class SchoolController extends Controller
{
    public function index(){
        $school=DB::select('select * from govschooldetails NATURAL JOIN schoolcontact_info ');

        return view('School.Index',compact('school'));
    }
    public  function create(){
        return view('School.AddNewSchool');
    }
    public  function AddContackInf(){
        return view('School.AddSchoolContackInf');
    }

    public  function viewfullDetailSch(Request $request){
        $SchID=$request->SchoolID;
        $deta=DB::select("select * from govschooldetails  WHERE SchoolID='$SchID' ");
        $det=DB::select("select * from  schoolcontact_info WHERE SchoolID='$SchID' ");
        return view('School.viewfullDetailSch',compact('deta','det'));

    }
    public  function viewfullDetailSchOWN(Request $request){
        $Sch=$request->name;
        $deta=DB::select("select * from govschooldetails  WHERE SchoolID='$Sch' ");
        $det=DB::select("select * from  schoolcontact_info WHERE SchoolID='$Sch' ");

        return view('School.viewfullDetailSchOWN',compact('deta','det'));
    }

    /**
     * @param Request $request
     */
    public function AddSchoolData(Request $request){

            $schoolid=$request->School_ID;
            $schoolname=$request->School_Name;
            $address1=$request->Address1;
            $address2=$request->Address2;
            $districk=$request->District;
            $postalcode=$request->Postal_Code;
            $studentcount=$request->Student_Intake_Count;
            $schoolgrade=$request->School_Grade;


            DB::insert("insert into govschooldetails (SchoolID, SchoolName,City,AddressLine1,AddressLine2,DistrictCode,StudentIntake_count,Schoolgrade) values ('$schoolid','$schoolname','$districk','$address1','$address2','$postalcode','$studentcount','$schoolgrade')");
            Session::flash('alert-success', 'School data was successful added!');

             return redirect()->route('School.AddNewSchool');
    }
    public function AddSchoolContactData(Request $request)
    {
        $schoolid = $request->School_ID;
        $contact_no = $request->Contact_Number;
        $phone_type = $request->Phone_Type;
        $person = $request->Owner;
        $email=$request->Email;

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
        $password = substr(str_shuffle($chars), 0, 8);
        $ps=bcrypt($password);
        $to = $email;
        $auth_username="s.anushan19950503@gmail.com";
        $subject = 'your registration is completed';
        $message = 'Welcome' .$schoolid . ''
            . 'Your email and password is following :'
            . 'Email:' . $email . ''
            . 'Your new password : ' . $password . ''
            . '   Now you can login with this email and password';
        $headers = 'From: Your name <'.$auth_username .'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


        mail($to,$subject,$message,$headers);
        DB::insert("insert into schoolcontact_info (SchoolID,ContactNumber,email,PhoneType,Owner) values ('$schoolid','$contact_no','$email','$phone_type','$person')");


        DB::insert("insert into users (name, email,password,role) values ('$schoolid','$email','$ps','2')");

        Session::flash('alert-success', 'School data was successfully added! ');



        return redirect()->route('School.AddSchoolContackInf');
    }
}
