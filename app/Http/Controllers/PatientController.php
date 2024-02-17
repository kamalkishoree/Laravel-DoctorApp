<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use App\Models\PatientInformation;
use App\Http\Traits\ImageUploadeTrait;
use App\Http\Traits\PushNotificationTrait;
use App\Models\VideoAudioHistory;
use Illuminate\Support\Facades\Crypt;

class PatientController extends Controller
{
    use ImageUploadeTrait;
	use PushNotificationTrait;
    /**
     * single patient information
     */
    public function patientProfile(){
        try{
            $id = auth()->user()->id;
            $userInformation = '';
            $userInformation = User::join('patient_informations','patient_informations.patient_id','=','users.id')
                ->where('users.id', $id)
                ->first(['users.*','patient_informations.*']);
            $data['userInformation'] =  $userInformation;
            return view('frontend/patient/profile',['data' => $data]);
        }
        catch(Exception $ex){
            echo "<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>";
        }
    }

    /**
     * update patient profile
     */

    public function updatePatientProfile(Request $request){
        DB::beginTransaction();
        try {
            $patientId = auth()->user()->id;
            // insert image using Trait method
            if($request->hasFile('image')){
                $patient['image'] = $this->imageUpload($request->file('image'),'patientImage');
            }
            $patient['name'] = $request->name;
            $patient['gender'] = $request->gender;
            $patient['location'] = $request->location;
            $patient['address'] = $request->address;
            $insertPatient =User::where("id",$patientId)->update($patient);
            if(!empty($insertPatient)){
                $patientInfo['dob'] =   $request->dob; 
                $patientInfo['weight'] =   $request->weight; 
                $patientInfo['height'] =   $request->height; 
                $patientInfo['blood_pressure'] =   $request->blood_pressure?'1':'0'; 
                $patientInfo['blood_suger'] =   $request->blood_suger?'1':'0'; 
                $patientInfo['symptom'] =   $request->symptom?implode(',',$request->symptom):''; 
                $patientInfo['allergy'] =   $request->allergy?$request->allergy:''; 
                $ins = PatientInformation::where("patient_id", $patientId)->update($patientInfo);;
            }
            DB::commit();
            return redirect()->back()->with('success','Account information updated successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * patient book appointment
     */
    public function bookAppointment(Request $request){
        try{
            $info = $request->all();
            $info['order_id'] = rand(100000000,999999999);
            $info['patient_id'] = auth()->user()->id;
            $info['time_slot']=Carbon::createFromFormat('h:i A', $request->time_slot)->format('H:i');
            $info['booking_date']=Carbon::createFromFormat('Y/m/d', $request->booking_date)->format('Y-m-d');
            $info['created'] = date('Y-m-d H:i:s');
            $insert = Booking::create($info);
            if($insert){
                return response()->json(['success' => true,'html'=>'<div class="alert alert-success" role="alert">Appointment booking request sent successfully.</div>']);
            }
            else{
                return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>Somting Wents Wrong, Please try after some time.</div>"]);
            }
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
        }
    }

    /**
     * single patient appointment list with patient id
     */
    public function patientAppointment(){
        try{
            $todayDate = date('Y-m-d');
            $todayTime = date('H:i');
            $patientId = auth()->user()->id;
            $booking = [];
            $booking = Booking::join('users','users.id','=','bookings.doctor_id')
                ->join('specialists','specialists.id','=','bookings.specialist_id')
                ->where('bookings.booking_date', '=', $todayDate)
                ->where('bookings.time_slot', '>=', $todayTime)
                ->where('bookings.patient_id','=',$patientId)
                ->orderBy('bookings.time_slot','asc')
                ->get(['users.name as doctorName','users.email','users.phone as doctorPhone','users.image','specialists.specialist','bookings.*']);
            $data['booking'] = $booking;
            return view('frontend/patient/appointment',['data' => $data]);
        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    } 

    /**
     * serch appointment with status wise
     */
    public function searchAppointmentPatient(Request $request){
        try{
            $patientId = auth()->user()->id;
            $type = $request->type;
            $booking = [];
            if($type == 'Today'){
                $todayDate = date('Y-m-d');
                $todayTime = date('H:i');
                $booking = Booking::join('users','users.id','=','bookings.doctor_id')
                    ->join('specialists','specialists.id','=','bookings.specialist_id')
                    ->where('bookings.booking_date', '=', $todayDate)
                    ->where('bookings.time_slot', '>=', $todayTime)
                    ->where('bookings.patient_id','=',$patientId)
                    ->orderBy('bookings.time_slot','asc')
                    ->get(['users.name as doctorName','users.email','users.phone as doctorPhone','users.image','specialists.specialist','bookings.*']);
            }
            else{
                $booking = Booking::join('users','users.id','=','bookings.doctor_id')
                    ->join('specialists','specialists.id','=','bookings.specialist_id')
                    ->where('bookings.status','=',$type)
                    ->where('bookings.patient_id','=',$patientId)
                    ->orderBy('bookings.booking_date','asc')
                    ->get(['users.name as doctorName','users.email','users.phone as doctorPhone','users.image','specialists.specialist','bookings.*']);
            }
            $html = '';
            if($booking->count() > 0){
                foreach($booking as $info){
                    $html .='<div class="col-md-6 mb-5"><div class="card my-section-card-nek"><div class="card-header">'.$info['doctorName'].' ('.$info['doctorPhone'].')</div><div class="card-body"><div class="row"><div class="col-md-4"><img src="'.asset("/doctorImage/".$info['image']).'"></div><div class="col-md-8"><blockquote class="blockquote mb-0"><small class="font-weight-normal mb-2">Order Id: '.$info['order_id'].'</small><br><small class="text-muted mb-2">Date :<span class="float-right">'.$info['booking_date'].'</span></small><br><small class="mb-2">Disease : <span class="float-right">'.$info['specialist'].'</span></small><footer class="blockquote-footer">Time Slot : <cite title="Source Title" class="float-right text-danger"></cite>'.$info['time_slot'].'</footer></blockquote></div></div></div><div class="card-footer"><small class="text-muted"></small><div class="det_cl"><a href="#"><i class="fa fa-video"></i></a><a href="#"><i class="fa fa-phone mx-2"></i></a><a href=""  data-bs-toggle="modal" onclick="appointmentDetails('.$info['id'].')" data-bs-target="#profile"><i class="fa fa-eye"></i></a></div></div></div></div>';
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
	* single appointment booking information
	*/

    public function patientAppointmentInformation(Request $request){
        try{
            $id = $request->id;
            $booking = [];
            $booking = Booking::join('users','users.id','=','bookings.doctor_id')
                ->join('specialists','specialists.id','=','bookings.specialist_id')
                ->join('doctor_informations','doctor_informations.doctor_id','=','bookings.doctor_id')
                ->where('bookings.id','=',$id)
                ->first(['users.name as doctorName','users.gender','users.email','users.phone as doctorPhone','users.image','specialists.specialist','bookings.*']);
            $html = '';
            if(!empty($booking)){
                $html .='<input type="hidden" value="'.$booking['id'].'" id="appointment_id"><div class="container"><div class="patnt_det"><div class="row"></div><div class="row img_det"><div class="col-md-4"><img src="'.asset("/doctorImage/".$booking['image']).'" class="w-30 rounded-circle w-50"></div><div class="col-md-8"><div class="right_nme"><div class="row"><h2>Personal Detail</h2><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Doctor Name:</b></div><div class="col-md-6">'.$booking['doctorName'].'</div></div></div><div class="col-md-6"><div class="row"><div class="col-md-5"><b>Email:</b></div><div class="col-md-7">'.$booking['email'].'</div></div></div></div><div class="row"><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Gender:</b></div><div class="col-md-6">'.$booking['gender'].'</div></div></div><div class="col-md-6"><div class="row"><div class="col-md-5"><b>Contact info:</b></div><div class="col-md-7">'.$booking['doctorPhone'].'</div></div></div></div><div class="row"><div class="col-md-3"></div><div class="col-md-9"></div></div></div></div></div><hr><div class="row"><h4 class="hed">Patient Information</h4><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Name:</b></div><div class="col-md-6"><span>'.$booking['name'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Phone</b></div><div class="col-md-6"><span>'.$booking['phone'].'</span></div></div></div></div><hr><div class="row"><h4 class="hed">Booking Detail</h4><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Order Id:</b></div><div class="col-md-6"><span>'.$booking['order_id'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Slot:</b></div><div class="col-md-6"><span>'.$booking['time_slot'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Booking Date:</b></div><div class="col-md-6"><span>'.$booking['booking_date'].'</span></div></div></div></div><hr><div class="row"><h4 class="hed">Diagnosis</h4><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Diagnosis Name:</b></div><div class="col-md-6"><span>'.$booking['specialist'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Create Reported:</b></div><div class="col-md-6"><span>'.$booking['created'].'</span></div></div></div><div class="col-md-6"><div class="row"><div class="col-md-6"><b>Status:</b></div><div class="col-md-6"><span>'.$booking['status'].'</span></div></div></div></div></div></div>';
                return response()->json(['success' => true,'html'=> $html]);
            }
            return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>No Record Found!</div>"]);
        }
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
    }

	/**
	* get call booking informaiton
	*/
	public function patientCallInformation(Request $request){
		try{
			$bookingInfo = '';
			$bookingInfo = VideoAudioHistory::join('users','users.id','=','booking_video_audio_history.doctor_id')
				->where('booking_video_audio_history.id','=',$request->id)
				->first(['booking_video_audio_history.*','users.name as doctorName','users.image']);
			$html = '';
            if(!empty($bookingInfo)){
                $html .='<div class="modal-body text-center text-light p-1"><h3 class="text-light">'.$bookingInfo['doctorName'].'</h3><h6 class="text-white-50">Video Call</h6><div class="img_box"><img src="'.asset("/doctorImage/".$bookingInfo['image']).'" class="w-100" alt=""></div><div class="calling_buttons row"><div class="col-md-6 text-center"><a href="'.route('patient-reject-call',Crypt::encryptString($bookingInfo['id'])).'" style="color: #fff;"> <button class="calling btn-danger text-light rounded-circle border-0 p-2" style="padding: 4px 9px !important;"><img src="'.asset('call/hang-up.png').'" class="w-100"></button><br>Decline</a></div><div class="col-md-6 text-center"><a href="'.route('patient-accept-call',Crypt::encryptString($bookingInfo['id'])).'" style="color: #fff;"> <button class="calling bg-success text-light border-0 rounded-circle p-2" style="padding: 4px 9px !important;"><img src="'.asset('call/phone-call.png').'" class="w-100"></button><br>Accept</a></div></div></div>';
                return response()->json(['success' => true,'html'=> $html]);
            }
            return response()->json(['success' => false,'html'=> "<div class='alert alert-danger' role='alert'>Please try after some time!</div>"]);
		}
        catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
	}
	
    public function patientAcceptCall($id){
		$bookingId =   Crypt::decryptString($id);
        try{
            $bookinInfo = '';
            $bookingInfo = VideoAudioHistory::join('users','users.id','=','booking_video_audio_history.patient_id')
				->where('booking_video_audio_history.id','=',$bookingId)
				->first(['booking_video_audio_history.*','users.name as patientName','users.image']);
			
			if(!empty($bookingInfo)){
				VideoAudioHistory::where('id', $bookingId)->update(['status' => 'Approved','start_time' => date('H:i:s')]);
				$data['room_id'] = $bookingInfo['room_id'];
				$data['patientName'] = $bookingInfo['patientName'];
				$data['mainId'] = $bookingInfo['id'];
				return view('frontend.patient.videoCall',['data' => $data] );
			}
			else{
				return "Please try after some time";
			}
        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }
	
	public function patientRejectCall($id){
		$bookingId =   Crypt::decryptString($id);
		try{
            $bookinInfo = '';
            $bookingInfo = VideoAudioHistory::join('users','users.id','=','booking_video_audio_history.patient_id')
				->where('booking_video_audio_history.id','=',$bookingId)
				->first(['booking_video_audio_history.*','users.name as patientName','users.image']);
			
			if(!empty($bookingInfo)){
				$doctorInfo = '';
                $doctorInfo = User::where('id',$bookingInfo['doctor_id'])->first();
                $device_key = $doctorInfo['device_key'];
				$mainId = 
				$data['room_id'] = $bookingInfo['room_id'];
				$name = $bookingInfo['patientName'];
				$notificationResponse =  $this->rejectNotification($device_key,$bookingInfo['id'],$name);
                $notiResult =  json_decode($notificationResponse);
                if($notiResult->success == 1){
                     return redirect()->route('patient-appointment')->with('success','Call decliend successfully!');
                }
                else{
                    VideoAudioHistory::where('id',$ins)->delete();
                     return redirect()->route('patient-appointment')->with('error','Please try after some time!');
                }
			}
			else{
				return "Please try after some time";
			}
        }
        catch(Exception $ex){
			return redirect()->route('patient-appointment')->with('error',$ex->getMessage());
        }
	}
}
