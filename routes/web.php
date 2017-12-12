<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Admin', 'AdminController@index')->name('Admin');
Route::get('/User', 'AdminController@user')->name('User');
Route::get('/SchoolLogin', 'AdminController@SchoolLogin')->name('SchoolLogin');

Route::get('/School', 'SchoolController@create')->name('School.AddNewSchool');
Route::get('/School/AddSchoolContackInf', 'SchoolController@AddContackInf')->name('School.AddSchoolContackInf');
Route::post('/School/AddSchoolData', 'SchoolController@AddSchoolData')->name('School.AddSchoolData');
Route::get('/School/Index', 'SchoolController@index')->name('School.Index');
Route::post('/School/AddSchoolContactData', 'SchoolController@AddSchoolContactData')->name('School.AddSchoolContactData');
Route::get('/School/viewfullDetailSch/{SchoolID}', 'SchoolController@viewfullDetailSch')->name('School.viewfullDetailSch');
Route::get('/School/viewfullDetailSchOWN/{Auth::user()->name}', 'SchoolController@viewfullDetailSchOWN')->name('School.viewfullDetailSchOWN');



Route::get('/User/AddnewUser', 'AdminController@AddUser')->name('User.AddNewUser');
Route::post('/User/Create', 'AdminController@create')->name('Admin.create');
Route::get('/User/viewUser', 'AdminController@ViewUser')->name('User.viewUser');

Route::get('/Applicant/ViewApp', 'ApplicantController@index')->name('Applicant.ViewApp');
Route::get('/Applicant/AddApplicant', 'ApplicantController@CreateAppicant')->name('Applicant.AddApplicant');
Route::get('/Applicant/ApplicantContact', 'ApplicantController@CreateAppContact')->name('Applicant.ApplicantContact');
Route::get('/Applicant/ApplicantGaurdian', 'ApplicantController@CreateAppGaurdian')->name('Applicant.ApplicantGaurdian');
Route::get('/Applicant/ApplicantResidence', 'ApplicantController@CreateAppResidence')->name('Applicant.ApplicantResidence');
Route::get('/Applicant/AppliedSchoolInf', 'ApplicantController@CreateAppAppliedSchoolInf')->name('Applicant.AppliedSchoolInf');
Route::get('/Applicant/AppDetail', 'ApplicantController@AppDetail')->name('Applicant.AppDetail');

Route::post('/Applicant/AddApplicantData', 'ApplicantController@AddApplicantData')->name('Applicant.AddApplicantData');
Route::post('/Applicant/AddApplicantGuardianData', 'ApplicantController@AddApplicantGuardianData')->name('Applicant.AddApplicantGuardianData');
Route::post('/Applicant/AddApplicantContactData', 'ApplicantController@AddApplicantContactData')->name('Applicant.AddApplicantContactData');
Route::post('/Applicant/AddApplicantResidenceData', 'ApplicantController@AddApplicantResidenceData')->name('Applicant.AddApplicantResidenceData');
Route::post('/Applicant/AppliedSchoolData', 'ApplicantController@AppliedSchoolData')->name('Applicant.AppliedSchoolData');


Route::get('/DistanceTable/ViewDistanceDetail', 'DistanceDetail@ViewDistancetable')->name('DistanceTable.ViewDistanceDetail');
Route::get('/DistanceTable/AddnewDistanceDetail', 'DistanceDetail@Add')->name('DistanceTable.AddnewDistanceDetail');
Route::post('/DistanceTable/AddData', 'DistanceDetail@AddData')->name('DistanceDetail.AddData');

Route::get('/oldStudent/AddOldstudent', 'OldStudent@Add')->name('oldStudent.AddOldstudent');
Route::get('/oldStudent/viewOldStudent', 'OldStudent@viewold')->name('oldStudent.viewOldStudent');
Route::post('/oldStudent/AddData', 'OldStudent@AddData')->name('OldStudent.AddData');


Auth::routes();