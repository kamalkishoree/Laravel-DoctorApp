<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Admin\SpecialityController;

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
/**
 * language route
 */
Route::get('change-lang/{id}', [LocalizationController::class, "lang_change"])->name('change-lang');


/**
 * web page route
 */
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/doctor-register',[HomeController::class,'doctorSignUp'])->name('doctor-register');





Route::get('/patient-register', function () {
    return view('frontend/patientRegister');
})->name('patient-register');




Route::get('/lab', function () {
    return view('frontend/lab');
})->name('lab');

Route::get('/push', function () {
    return view('frontend.pushtest');
})->name('push');

Route::get('/medicine', function () {
    return view('frontend/medicine');
})->name('medicine');

Route::get('/contact-us', function () {
    return view('frontend/contactUs');
})->name('contact-us');

Route::get('/Doctor', function () {
    return view('frontend/doctor');
})->name('Doctor');

// Route::get('/doc-details', function () {
//     return view('frontend/docdetails');
// })->name('doc-details');

// Route::get('/Profile', function () {
//     return view('frontend/profilee');
// })->name('profile');

Route::get('/Appointment', function () {
    return view('frontend/appointment');
})->name('Appointment');

Route::get('/appoint-view', function () {
    return view('frontend/appointview');
})->name('appoint-view');


Route::get('/appointment-Book', function () {
    return view('frontend/appointment_book');
})->name('appointment-Book');


/**
 * Doctor/Patient Login register logout route
 */
Route::post('/doctor-signup',[LoginRegisterController::class,'doctorRegister'])->name('doctor-signup');
Route::post('/patient-signup',[LoginRegisterController::class,'patientRegister'])->name('patient-signup');
Route::post('/patient-login',[LoginRegisterController::class,'patientLogin'])->name('patient-login');
Route::post('/doctor-login',[LoginRegisterController::class,'doctorLogin'])->name('doctor-login');
Route::post('/doctor-login',[LoginRegisterController::class,'doctorLogin'])->name('doctor-login');
Route::get('/doctor-logout',[LoginRegisterController::class,'doctorLogout'])->name('doctor-logout');
Route::get('/patient-logout',[LoginRegisterController::class,'patientLogout'])->name('patient-logout');

/**
 * Patient section route
 */

 Route::group(['middleware' => ['validatePatient']],function(){
    Route::get('patient-profile',[PatientController::class,'patientProfile'])->name('patient-profile');
    Route::post('book-appointment',[PatientController::class,'bookAppointment'])->name('book-appointment');
    Route::get('patient-appointment',[PatientController::class,'patientAppointment'])->name('patient-appointment');
    Route::post('search-appointment-patient',[PatientController::class,'searchAppointmentPatient'])->name('search-appointment-patient');
    Route::post('update-patient-profile',[PatientController::class,'updatePatientProfile'])->name('update-patient-profile');
    Route::post('appointment-info-patient',[PatientController::class,'patientAppointmentInformation'])->name('appointment-info-patient');
    Route::get('patient-accept-call/{id}',[PatientController::class,'patientAcceptCall'])->name('patient-accept-call');
    Route::get('patient-reject-call/{id}',[PatientController::class,'patientRejectCall'])->name('patient-reject-call');
    Route::post('patient-call-information',[PatientController::class,'patientCallInformation'])->name('patient-call-information');
 });

 /**
  * doctor section route
  */

Route::get('/find-doctor/{id}',[DoctorController::class,'findDoctor'])->name('find-doctor');
Route::get('/doctor-information/{id}',[DoctorController::class,'doctorInformation'])->name('doctor-information');
Route::post('/search-with-specialist',[DoctorController::class,'searchWithSpecialist'])->name('search-with-specialist');
Route::group(['middleware' => ['validateDoctor']],function(){
    Route::get('doctor-profile',[DoctorController::class,'doctorProfile'])->name('doctor-profile');
    Route::post('update-doctor-profile',[DoctorController::class,'updateDoctorProfile'])->name('update-doctor-profile');
    Route::get('doctor-appointment',[DoctorController::class,'doctorAppointment'])->name('doctor-appointment');
    Route::post('search-appointment',[DoctorController::class,'searchAppointment'])->name('search-appointment');
    Route::post('appointment-info',[DoctorController::class,'appointmentInformation'])->name('appointment-info');
    Route::post('update-appointment-status',[DoctorController::class,'updateAppointmentStatus'])->name('update-appointment-status');
    Route::get('doctor-appointment-video/{id}',[DoctorController::class,'doctorVideoCall'])->name('doctor-appointment-video');
    Route::get('sendWebNotification',[DoctorController::class,'sendWebNotification'])->name('sendWebNotification');
	Route::post('patient-rejected',[DoctorController::class,'patientRejectCall'])->name('patient-rejected');
 });

/**
 * Admin Panel routes
 */

Route::get('/admin', function () {
    return view('backend.adminPages.login');
})->name('admin');
Route::post('/admin-login', [LoginController::class, 'login'])->name('admin-login');
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');
    Route::get('doctor-schedule', [AdminController::class, 'doctorSchedule'])->name('doctor-schedule')->middleware('is_admin');
    Route::get('view-appointment', [AdminController::class, 'viewAppointment'])->name('view-appointment')->middleware('is_admin');
    Route::post('single-appointment-info', [AdminController::class, 'appointmentInfo'])->name('single-appointment-info')->middleware('is_admin');
    Route::get('doctor-list', [AdminController::class, 'doctorList'])->name('doctor-list')->middleware('is_admin');
    Route::get('patient-list', [AdminController::class, 'patientList'])->name('patient-list')->middleware('is_admin');
    Route::post('single-doctor-info', [AdminController::class, 'singleDoctorInfo'])->name('single-doctor-info')->middleware('is_admin');
    Route::get('speciality-list', [SpecialityController::class, 'index'])->name('speciality-list')->middleware('is_admin');
    Route::any('specialist-delete/{id}', [SpecialityController::class, 'specialistDelete'])->name('specialist-delete')->middleware('is_admin');
    Route::get('speciality-edit/{id}',[SpecialityController::class,'edit'])->name('speciality-edit')->middleware('is_admin');
    Route::post('speciality-update/{id}',[SpecialityController::class,'update'])->name('speciality-update')->middleware('is_admin');
    Route::get('speciality-create',[SpecialityController::class,'create'])->name('speciality-create')->middleware('is_admin');
    Route::post('speciality-store',[SpecialityController::class,'store'])->name('speciality-store')->middleware('is_admin');
    Route::post('update-doctor-status',[AdminController::class,'updateDoctorStatus'])->name('update-doctor-status');
});
 