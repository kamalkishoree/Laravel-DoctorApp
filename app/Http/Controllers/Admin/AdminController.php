<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use Exception;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(){
        $getAppointment = Booking::get();
        $appointment_count = $getAppointment->count();
        $data['appointment_count'] = $appointment_count;

        $patient_count = User::where('user_type','=','patient')->count();
        $data['patient_count'] = $patient_count;

        $doctor_count = User::where('user_type','=','doctor')->count();
        $data['doctor_count'] = $doctor_count;

        $doctorList =  User::join('doctor_informations','doctor_informations.doctor_id','=','users.id')
                        ->join('specialists','specialists.id','=','doctor_informations.specialist_id')
                        ->where('users.user_type', 'doctor')
                        ->orderBy('users.id','desc')
                        ->offset(0)
                        ->limit(6)
                        ->get(['users.*','doctor_informations.*','specialists.specialist']);
        $data['doctorList'] = $doctorList;
       
        $newPatient = [];
        $newPatient = User::join('patient_informations','patient_informations.patient_id','=','users.id')
                        ->where('users.user_type', 'patient')
                        ->orderBy('users.id','desc')
                        ->offset(0)
                        ->limit(10)
                        ->get(['users.*','patient_informations.dob','patient_informations.weight','patient_informations.symptom','patient_informations.allergy']);
        
        $data['newPatient'] = $newPatient;
        
        return view('backend.adminPages.dashboard',['data'=>$data]);
       
    }

    public function doctorSchedule(){
        return view('backend.appointment.doctorSchedule');
    }

    public function viewAppointment(){
        try{
        $appointmentList = [];
        $appointmentList = Booking::join('users','users.id','bookings.doctor_id')
                        ->join('specialists','specialists.id','bookings.specialist_id')
                        ->join('users as p_users','p_users.id','bookings.patient_id')
                        ->orderBy('bookings.id','desc')
                        ->get(['bookings.*','users.name as doctorName','p_users.email','p_users.image','p_users.name as patientName']);
        if(!empty($appointmentList)){
        $data['appoitmentList'] = $appointmentList;
        return view('backend.appointment.viewAppointment',['data'=>$data]);
        }
        return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>No Record Found!</div>"]);
    }
    catch(Exception $ex){
        return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
    }
    }

    /*
     *  single appointment information
     */

    function appointmentInfo(Request $request){
        try{
            $userList = "";
            $userList = Booking::join('users','users.id','bookings.doctor_id')
                        ->join('specialists','specialists.id','bookings.specialist_id')
                        ->join('users as p_users','p_users.id','bookings.patient_id')
                        ->where('bookings.id',$request->id)
                        ->get(['bookings.*','users.name as doctorName','p_users.email','p_users.image','p_users.name as patientName']);
            $html = '';
            if(!empty($userList)){
                // $dropHtml = '';
                // if($userList['status_verify'] == 'Pending'){
                //    $dropHtml .=  '<div class="col-md-6"><div class="row"><div class="col-md-6"><b>Update Status:</b></div><div class="col-md-6"><select class="form-select" id="update-doctor-status" aria-label="Default select example"><option value="">Select status</option><option value="Approved">Approved</option><option value="Rejected">Rejected</option></select></div></div></div>';
                // }
                // if($userList['status_verify'] == 'Approved'){
                //     $dropHtml .=  '<div class="col-md-6"><div class="row"><div class="col-md-6"><b>Update Status:</b></div><div class="col-md-6"><select class="form-select" id="update-doctor-status" aria-label="Default select example"><option value="">Select status</option><option value="Rejected">Rejected</option></select></div></div></div>';
                // }
                $html .='<div class="modal-body"> <div class="row spaec"> <div class="col-md-4"> <div class="img_box"> <img src="team20.png" class="w-100" alt=""> </div></div><div class="col-md-8 text-start"> <div class="row"> <div class="col-md-6">Rajni</div><div class="col-md-6">708777280</div></div><div class="row"> <div class="col-md-6">Rajni.infosif@gmail.com</div><div class="col-md-6">Male</div></div><div class="row"> <div class="col-md-5"> <ul class="d-flex icons list-unstyled"> <li><i class="fa fa-facebook"></i></li><li><i class="fa fa-instagram"></i></li><li><i class="fa fa-linkedin"></i></li><li><i class="fa fa-twitter"></i></li></ul> </div><div class="col-md-6 offset-md-1"> <div class="row"> <div class="col-md-12">Licence Number: 123456789</div><label for="cars">Choose a car:</label> <select name="cars" id="cars" style="width:150px;height:50px"> <option value="volvo">Pending</option> <option value="saab">Approved</option> <option value="opel">Rejected</option> </select> </div></div></div></div></div></div><div class="row Abt_content text-start"> <div class="container_fluid"> <div class="container"> <h3 class="abt_head">About</h3> <div class="row"> <div class="col-md-6">Address:</div><div class="col-md-6">11 Phase Mohali</div></div><div class="row"> <div class="col-md-6">Loaction:</div><div class="col-md-6">Mohali</div></div><div class="row"> <div class="col-md-6">Short Description:</div><div class="col-md-6"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div></div><div class="row"> <div class="col-md-6">Long Description:</div><div class="col-md-6"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div></div></div></div></div></div>';
                return response()->json(['success' => true,'html'=> $html]);
            }
            return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>No Record Found!</div>"]);
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
    }


    public function doctorList(){
        $userList = [];
        $userList = User::join('doctor_informations','doctor_informations.doctor_id','=','users.id')
                ->join('specialists','specialists.id','=','doctor_informations.specialist_id')
                ->where('users.user_type', 'doctor')
                ->orderBy('users.id','desc')
                ->get(['users.*','doctor_informations.licence_id','specialists.specialist']);
        $data['userList'] = $userList;
        return view('backend.doctor.doctorList',['data' => $data]);
    }

    /**
     * get single doctor infromation with doctor id
     */
    function singleDoctorInfo(Request $request){
        try{
            $userList = "";
            $userList = User::join('doctor_informations','doctor_informations.doctor_id','=','users.id')
                ->join('specialists','specialists.id','=','doctor_informations.specialist_id')
                ->where('users.id',$request->id)
                ->orderBy('users.id','desc')
                ->first(['users.*','doctor_informations.twitter_url','doctor_informations.short_description','doctor_informations.long_description','doctor_informations.facebook_url','doctor_informations.instagram_url','doctor_informations.linkedin_url','doctor_informations.licence_id','doctor_informations.facebook_url','specialists.specialist']);
            $html = '';
            if(!empty($userList)){
                $dropHtml = '';
                if($userList['status_verify'] == 'Pending'){
                   $dropHtml .=  '<div class="col-md-6"><div class="row"><div class="col-md-6"><b>Update Status:</b></div><div class="col-md-6"><select class="form-select" id="update-doctor-status" aria-label="Default select example"><option value="">Select status</option><option value="Approved">Approved</option><option value="Rejected">Rejected</option></select></div></div></div>';
                }
                if($userList['status_verify'] == 'Approved'){
                    $dropHtml .=  '<div class="col-md-6"><div class="row"><div class="col-md-6"><b>Update Status:</b></div><div class="col-md-6"><select class="form-select" id="update-doctor-status" aria-label="Default select example"><option value="">Select status</option><option value="Rejected">Rejected</option></select></div></div></div>';
                }
                $html .='<input type="hidden" value="'.$userList['id'].'" id="appointment_id"><div class="row spaec"> <div class="col-md-4"> <div class="img_box"> <img src="'.asset("/doctorImage/".$userList['image']).'" class="w-100" alt=""> </div></div><div class="col-md-8 text-start"> <div class="row"> <div class="col-md-6">'.$userList['name'].'</div><div class="col-md-6">'.$userList['phone'].'</div></div><div class="row"> <div class="col-md-6">'.$userList['email'].'</div><div class="col-md-6">'.$userList['gender'].'</div></div><div class="row"> <div class="col-md-5"> <ul class="d-flex icons list-unstyled"> <li><i class="fa fa-facebook"></i></li><li><i class="fa fa-instagram"></i></li><li><i class="fa fa-linkedin"></i></li><li><i class="fa fa-twitter"></i></li></ul> </div><div class="col-md-6 offset-md-1"> <div class="row"> <div class="col-md-12">Licence- '.$userList['licence_id'].'</div>'.$dropHtml.'</div></div></div></div></div><div class="row Abt_content text-start"><div class="col-md-12"> <div class="container_fluid"> <div class="container"> <h3 class="abt_head">About</h3> <div class="row"> <div class="col-md-3">Address:</div><div class="col-md-9">'.$userList['address'].'</div></div><div class="row"> <div class="col-md-3">Loaction:</div><div class="col-md-9">'.$userList['location'].'</div></div><div class="row"> <div class="col-md-3">Short Description:</div><div class="col-md-9"><p>'.$userList['short_description'].'</p></div></div><div class="row"> <div class="col-md-3">Long Description:</div><div class="col-md-9"><p>'.$userList['long_description'].'.</p></div></div></div></div></div></div>';
                return response()->json(['success' => true,'html'=> $html]);
            }
            return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>No Record Found!</div>"]);
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
    }

    public function updateDoctorStatus(Request $request){
        try{
            $upInfo['status_verify'] = $request->status;
            $insertDoctor = User::where("id",$request->id)->update($upInfo);
            if($insertDoctor){
                return response()->json(['success' => true,'html'=>'Doctor status updated successfully']);
            }
            else{
                return response()->json(['success' => false,'html'=>'Please try after some time']);
            }
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>$ex->getMessage()]);
		}
    }

    public function patientList(){
        $userList = [];
        $userList = User::join('patient_informations','patient_informations.patient_id','=','users.id')
                ->where('users.user_type', 'patient')
                ->orderBy('users.id','desc')
                ->get(['users.*','patient_informations.dob','patient_informations.weight','patient_informations.symptom','patient_informations.allergy']);
        $data['userList'] = $userList;
        return view('backend.patient.patientList',['data' => $data]);
    }
    public function specialistList(){
        $specialist = [];
        $specialist = Specialist::select('*')
                ->orderBy('id','DESC')
                ->get();
        $data['specialist'] =$specialist;
        return view('backend.speciality.specialityList',['data'=>$data]);
        
    }
    public function specialistDelete(Specialist $id){
        try{
            $id->delete();
            return redirect()->back()->with('success','Speciality deleted successfully!');
        }
        catch(Exception $ex){
            return redirect()->back()->with('error',$ex->getMessage());
        }
    }
    public function editSpeciality(){
       
       return view('backend.speciality.editSpeciality');
    }
}
