<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public  function create(){
        return view('School.AddNewSchool');
    }
}
