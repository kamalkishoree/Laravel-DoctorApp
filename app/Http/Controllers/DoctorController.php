<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\DoctorInformation;
use App\Models\VideoAudioHistory;
use App\Models\Specialist;
use App\Models\Booking;
use App\Http\Traits\ImageUploadeTrait;
use App\Http\Traits\PushNotificationTrait;
use Exception;
use Illuminate\Support\Facades\DB;
use Carbon\CarbonPeriod;
use Illuminate\Support\Str;


class DoctorController extends Controller
{
    use ImageUploadeTrait;
    use PushNotificationTrait;
    /**
     * find doctor with specialist
     */
    public function findDoctor($id){
        try{
            $specialistId =   Crypt::decryptString($id);
            $specialists = [];
            $specialists = Specialist::select(['id','specialist','image'])
                ->orderBy("id", "asc")
                ->get();
            $doctorList = [];
            $doctorList = User::join('doctor_informations','doctor_informations.doctor_id','=','users.id')
                ->join('specialists','specialists.id','=','doctor_informations.specialist_id')
                ->where('doctor_informations.specialist_id','=',  $specialistId)
                ->get(['specialists.specialist','users.*','doctor_informations.*']);
            $data['doctorList'] = $doctorList;
            $data['specialist'] = $specialists;
            $data['specialistId'] = $specialistId ;
            return view('frontend/doctor/findDoctor',['data' => $data]);
        }
        catch(Exception $ex){
            echo "<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>";
        }
    }

    /**
     * seach doctor with specialist
     */

     public function searchWithSpecialist(Request $request){
        try{
            $specialistId =   $request->id;
            $doctorList = [];
            $doctorList = User::join('doctor_informations','doctor_informations.doctor_id','=','users.id')
                ->join('specialists','specialists.id','=','doctor_informations.specialist_id')
                ->where('doctor_informations.specialist_id','=',  $specialistId)
                ->get(['specialists.specialist','users.*','doctor_informations.*']);
            $html = '';
            if($doctorList->count() > 0){
                foreach($doctorList as $doctorList){
                    $fb = $doctorList['facebook_url']? $doctorList['facebook_url']:'';
                    $tw = $doctorList['twitter_url']? $doctorList['twitter_url']:'';
                    $li = $doctorList['linkedin_url']? $doctorList['linkedin_url']:'';
                    $is = $doctorList['instagram_url']? $doctorList['instagram_url']:'';
                    $html .='<div class="col-lg-3 col-md-6 col-sm-6"><div class="single-doctor-box"><div class="doctor-image"><img src="'.asset("/doctorImage/".$doctorList['image']).'" alt="image"><a href="'.route('doctor-information',Crypt::encryptString($doctorList['doctor_id'])).'" class="details-btn"><i class="fas fa-plus"></i></a></div><div class="doctor-content"><h3><a href="#">'.$doctorList['name'].'</a></h3><span>'.$doctorList['specialist'].'</span><ul class="social"><li><a target="_blank" href="'.$fb.'"><i class="fab fa-facebook-f"></i></a></li><li><a target="_blank" href="'.$tw.'"><i class="fab fa-twitter"></i></a></li><li><a target="_blank" href="'.$li.'"><i class="fab fa-linkedin-in"></i></a></li><li><a target="_blank" href="'.$is.'"><i class="fab fa-instagram"></i></a></li></ul></div></div></div>';
                }
                return response()->json(['success' => true,'html'=> $html]);
            }
            return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>No List found!</div>"]);
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
     }

     /**
      * doctor profile
      */
    public function doctorProfile(){
        try{
            $id = auth()->user()->id;
            $userInformation = '';
            $userInformation = User::join('doctor_informations','doctor_informations.doctor_id','=','users.id')
                ->join('specialists','specialists.id','=','doctor_informations.specialist_id')
                ->where('users.id', $id)
                ->first(['users.*','doctor_informations.*','specialists.specialist']);
            $data['userInformation'] =  $userInformation;
            return view('frontend/doctor/profile',['data' => $data]);
        }
        catch(Exception $ex){
            echo "<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>";
        }
    }

    /**
     * update doctor profile information
     */
    public function updateDoctorProfile(Request $request){
        DB::beginTransaction();
        try {
            $doctorId = auth()->user()->id;
            $doctor = [];
            // insert image using Trait method
            if($request->hasFile('image')){
                $doctor['image'] = $this->imageUpload($request->file('image'),'doctorImage');
            }
            $doctor['name'] = $request->name;
            $doctor['gender'] = $request->gender;
            $doctor['address'] = $request->address;
            $insertDoctor = User::where("id",$doctorId)->update($doctor);
            if(!empty($insertDoctor)){
                $doctorInfo['short_description'] = $request->short_description;
                $doctorInfo['long_description'] = $request->long_description;
                $doctorInfo['facebook_url'] = $request->facebook_url?$request->facebook_url:'';
                $doctorInfo['instagram_url'] = $request->instagram_url?$request->instagram_url:'';
                $doctorInfo['linkedin_url'] = $request->linkedin_url?$request->linkedin_url:'';
                $doctorInfo['twitter_url'] = $request->twitter_url?$request->twitter_url:'';
                $ins = DoctorInformation::where("doctor_id", $doctorId)->update($doctorInfo);
            }
            DB::commit();
            return redirect()->back()->with('success','Account information updated successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Single doctor information
     */

     public function doctorInformation($id){
        try{
            $period = new CarbonPeriod('09:00', '30 minutes', '18:00'); // for create use 24 hours format later change format 
            $slots = [];
            foreach($period as $item){
                array_push($slots,$item->format("h:i A"));
            }

            $doctorId =   Crypt::decryptString($id);
            $userInformation = User::join('doctor_informations','doctor_informations.doctor_id','=','users.id')
                ->join('specialists','specialists.id','=','doctor_informations.specialist_id')
                ->where('users.id', $doctorId)
                ->first(['users.*','doctor_informations.*','specialists.specialist']);
            $data['userInformation'] =  $userInformation;
            $data['timeSlots'] = $slots;
            return view('frontend/doctor/doctorInformation',['data' => $data]);
        }
        catch(Exception $ex){
            echo "<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>";
        }
    }

    /**
     * get all booking list with doctor id
     */
    public function doctorAppointment(){
        try{
            $todayDate = date('Y-m-d');
            $todayTime = date('H:i');
            $doctorId = auth()->user()->id;
            $booking = [];
            $booking = Booking::join('users','users.id','=','bookings.patient_id')
                ->join('specialists','specialists.id','=','bookings.specialist_id')
                ->join('patient_informations','patient_informations.patient_id','=','bookings.patient_id')
                ->where('bookings.status','=','Approved')
                ->where('bookings.booking_date', '=', $todayDate)
                ->where('bookings.time_slot', '>=', $todayTime)
                ->where('bookings.doctor_id','=',$doctorId)
                ->orderBy('bookings.time_slot','asc')
                ->get(['patient_informations.symptom','patient_informations.allergy','patient_informations.lab_result','patient_informations.dob','patient_informations.weight','patient_informations.height','patient_informations.blood_pressure','patient_informations.blood_suger','users.name as patientName','users.email','users.phone as patientPhone','users.image','specialists.specialist','bookings.*']);
            $data['booking'] = $booking;
            return view('frontend/doctor/appointment',['data' => $data]);
        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }

    /**
     * search doctor appointment with status wise
     */
    public function searchAppointment(Request $request){
        try{
            $doctorId = auth()->user()->id;
            $type = $request->type;
            $booking = [];
            if($type == 'Today'){
                $todayDate = date('Y-m-d');
                $todayTime = date('H:i');
                $booking = Booking::join('users','users.id','=','bookings.patient_id')
                ->join('specialists','specialists.id','=','bookings.specialist_id')
                ->join('patient_informations','patient_informations.patient_id','=','bookings.patient_id')
                ->where('bookings.status','=','Approved')
                ->where('bookings.booking_date', '=', $todayDate)
                ->where('bookings.time_slot', '>=', $todayTime)
                ->where('bookings.doctor_id','=',$doctorId)
                ->orderBy('bookings.time_slot','asc')
                ->get(['patient_informations.symptom','patient_informations.allergy','patient_informations.lab_result','patient_informations.dob','patient_informations.weight','patient_informations.height','patient_informations.blood_pressure','patient_informations.blood_suger','users.name as patientName','users.email','users.phone as patientPhone','users.image','specialists.specialist','bookings.*']);
            }
            else{
                $booking = Booking::join('users','users.id','=','bookings.patient_id')
                    ->join('specialists','specialists.id','=','bookings.specialist_id')
                    ->join('patient_informations','patient_informations.patient_id','=','bookings.patient_id')
                    ->where('bookings.status','=',$type)
                    ->where('bookings.doctor_id','=',$doctorId)
                    ->orderBy('bookings.booking_date','asc')
                    ->get(['patient_informations.symptom','patient_informations.allergy','patient_informations.lab_result','patient_informations.dob','patient_informations.weight','patient_informations.height','patient_informations.blood_pressure','patient_informations.blood_suger','users.name as patientName','users.email','users.phone as patientPhone','users.image','specialists.specialist','bookings.*']);
            }
            $html = '';
            if($booking->count() > 0){
                foreach($booking as $info){
                    $html .='<div class="col-md-6 mb-5"><div class="card my-section-card-nek"><div class="card-header">'.$info['name'].' ('.$info['phone'].')</div><div class="card-body"><div class="row"><div class="col-md-4"><img src="'.asset("/patientImage/".$info['image']).'"></div><div class="col-md-8"><blockquote class="blockquote mb-0"><small class="font-weight-normal mb-2">Order Id: '.$info['order_id'].'</small><br><small class="text-muted mb-2">Date :<span class="float-right">'.$info['booking_date'].'</span></small><br><small class="mb-2">Disease : <span class="float-right">'.$info['specialist'].'</span></small><footer class="blockquote-footer">Time Slot : <cite title="Source Title" class="float-right text-danger"></cite>'.$info['time_slot'].'</footer></blockquote></div></div></div><div class="card-footer"><small class="text-muted"></small><div class="det_cl"><a href="#"><i class="fa fa-video"></i></a><a href="#"><i class="fa fa-phone mx-2"></i></a><a href="" data-bs-toggle="modal" onclick="appointmentDetails('.$info['id'].')" data-bs-target="#profile"><i class="fa fa-eye"></i></a></div></div></div></div>';
                }
                return response()->json(['success' => true,'html'=> $html]);
            }
            return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>No Record Found!</div>"]);
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
    }

    /**
     * single appointment information with appointment id
     */

    public function appointmentInformation(Request $request){
        try{
            $id = $request->id;
            $booking = [];
            $booking = Booking::join('users','users.id','=','bookings.patient_id')
                ->join('specialists','specialists.id','=','bookings.specialist_id')
                ->join('patient_informations','patient_informations.patient_id','=','bookings.patient_id')
                ->where('bookings.id','=',$id)
                ->first(['patient_informations.symptom','patient_informations.allergy','patient_informations.lab_result','patient_informations.dob','patient_informations.weight','patient_informations.height','patient_informations.blood_pressure','patient_informations.blood_suger','users.name as patientName','users.gender','users.email','users.phone as patientPhone','users.image','specialists.specialist','bookings.*']);
            $html = '';
            if(!empty($booking)){
                $dropHtml = '';
                if($booking['status'] == 'Pending'){
                   $dropHtml .=  '<div class="col-md-6"><div class="row"><div class="col-md-6"><b>Update Status:</b></div><div class="col-md-6"><select class="form-select" id="update-appoinitment-status" aria-label="Default select example"><option value="">Select status</option><option value="Approved">Approved</option><option value="Rejected">Rejected</option></select></div></div></div>';
                }
                if($booking['status'] == 'Approved'){
                    $dropHtml .=  '<div class="col-md-6"><div class="row"><div class="col-md-6"><b>Update Status:</b></div><div class="col-md-6"><select class="form-select" id="update-appoinitment-status" aria-label="Default select example"><option value="">Select status</option><option value="Completed">Completed</option><option value="Rejected">Rejected</option></select></div></div></div>';
                }
                $html .='<input type="hidden" value="'.$booking['id'].'" id="appointment_id"><div class="container"><div class="patnt_det"><div class="row"></div><div class="row img_det"><div class="col-md-4"><img src="'.asset("/patientImage/".$booking['image']).'" class="w-30 rounded-circle"></div><div class="col-md-8"><div class="right_nme"><div class="row"><h2>Personal Detail</h2><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Patient Name:</b></div><div class="col-md-6">'.$booking['patientName'].'</div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Email:</b></div><div class="col-md-6">'.$booking['email'].'</div></div></div></div><div class="row"><div class="col-md-6"><div class="row"><div class="col-md-6">Gender:</div><div class="col-md-6">'.$booking['gender'].'</div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6">DOB:</div><div class="col-md-6">'.$booking['dob'].'</div></div></div></div><div class="row"><div class="col-md-3">Contact info:</div><div class="col-md-9">'.$booking['patientPhone'].'</div></div></div></div></div><hr><div class="row"><h4 class="hed">Patient Information</h4><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Name:</b></div><div class="col-md-6"><span>'.$booking['name'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Phone</b></div><div class="col-md-6"><span>'.$booking['phone'].'</span></div></div></div></div><hr><div class="row"><h4 class="hed">Booking Detail</h4><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Order Id:</b></div><div class="col-md-6"><span>'.$booking['order_id'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Slot:</b></div><div class="col-md-6"><span>'.$booking['time_slot'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Booking Date:</b></div><div class="col-md-6"><span>'.$booking['booking_date'].'</span></div></div></div></div><hr><div class="row"><h4 class="hed">Diagnosis</h4><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Diagnosis Name:</b></div><div class="col-md-6"><span>'.$booking['specialist'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Create Reported:</b></div><div class="col-md-6"><span>'.$booking['created'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Status:</b></div><div class="col-md-6"><span>'.$booking['status'].'</span></div></div></div>'.$dropHtml.'</div></div></div>';
                return response()->json(['success' => true,'html'=> $html]);
            }
            return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>No Record Found!</div>"]);
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
    }

    /**
     * update appointment status
     */
    public function updateAppointmentStatus(Request $request){
        try{
            $upInfo['status'] = $request->status;
            $insertDoctor = Booking::where("id",$request->id)->update($upInfo);
            if($insertDoctor){
                return response()->json(['success' => true,'html'=>'Appointment status updated successfully']);
            }
            else{
                return response()->json(['success' => false,'html'=>'Please try after some time']);
            }
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>$ex->getMessage()]);
		}
    }

    /**
     * doctor patient video call
     */
    public function doctorVideoCall($id){
        $bookingId =   Crypt::decryptString($id);
        try{
            $bookinInfo = '';
            $bookingInfo = Booking::join('users','users.id','=','bookings.doctor_id')
                ->where('bookings.id','=',$bookingId)
                ->firstOrFail(['bookings.*','users.name as doctorName','users.image']);
            $insInfo['room_id'] = $bookingInfo['order_id'];
            $insInfo['booking_id'] = $bookingInfo['id'];
            $insInfo['doctor_id'] = $bookingInfo['doctor_id'];
            $insInfo['patient_id'] = $bookingInfo['patient_id'];
            $insInfo['status'] = "Pending";
            $insInfo['call_type'] = "Video";
            $insInfo['start_time'] = date('H:i:s');
            $insInfo['end_time'] = '00:00:00';
            $ins = VideoAudioHistory::insertGetId($insInfo);
            if($ins){
                $patientInfo = '';
                $patientInfo = User::where('id',$bookingInfo['patient_id'])->first();
                $device_key =$patientInfo['device_key'];
                $mainId = $ins;
                $name = $patientInfo['name'];
                $notificationResponse =  $this->sendNotification($device_key,$mainId,$name);
                $notiResult =  json_decode($notificationResponse);
                if($notiResult->success == 1){
                    $data['room_id'] = $insInfo['room_id'];
                    $data['doctorName'] = $bookingInfo['doctorName'];
                    $data['mainId'] = $ins;
                    return view('frontend.doctor.videoCall',['data' => $data] );
                }
                else{
                    VideoAudioHistory::where('id',$ins)->delete();
                    return redirect()->back()->with('error','Patient are not available!');
                }
            }
            return redirect()->back()->with('error','Please try after some time!');
        }
        catch(Exception $ex){
            return redirect()->back()->with('error',$ex->getMessage());
        }
    }
	
	public function patientRejectCall(Request $request){
		try{
			$bookingInfo = '';
			$bookingInfo = VideoAudioHistory::join('users','users.id','=','booking_video_audio_history.patient_id')
				->where('booking_video_audio_history.id','=',$request->id)
				->first(['booking_video_audio_history.*','users.name as patient_name','users.image']);
			$html = '';
            if(!empty($bookingInfo)){
                $html .='<div class="modal-body text-center text-light p-1"> <div class="img_box"> <img src="'.asset("/patientImage/".$bookingInfo['image']).'" class="w-100" alt=""> </div><h5 class="p-3">'.$bookingInfo['patient_name'].' is unavailable</h5> <div class="bottom-bar"> <div class="calling_buttons row" style="width:100%"> <div class="col-md-12 text-center"><a href="'.route('doctor-appointment').'"><button class="btn btn-primary text-light border-0  p-2" style="padding: 4px 9px !important;">Back To Appointment</button></a> </div></div></div></div>';
                return response()->json(['success' => true,'html'=> $html]);
            }
            return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>Please try after some time!</div>"]);
		}
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
	}
}

