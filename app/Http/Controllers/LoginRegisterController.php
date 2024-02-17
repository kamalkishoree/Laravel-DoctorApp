<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DoctorInformation;
use App\Models\PatientInformation;
use App\Http\Traits\ImageUploadeTrait;
use App\Http\Requests\DoctorRegisterRequest;
use App\Http\Requests\PatientRegisterRequest;
use Exception;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    use ImageUploadeTrait;
    public function doctorRegister(DoctorRegisterRequest $request){
        DB::beginTransaction();
        try {
            // insert image using Trait method
            if($request->hasFile('image')){
                $doctor['image'] = $this->imageUpload($request->file('image'),'doctorImage');
            }
            $doctor['name'] = $request->name;
            $doctor['gender'] = $request->gender;
            $doctor['email'] = $request->email;
            $doctor['phone'] = $request->phone;
            $doctor['password'] = bcrypt($request->password);
            $doctor['location'] = $request->location;
            $doctor['address'] = $request->address;
            $doctor['is_admin'] = '0';
            $doctor['user_type'] = 'doctor';
            $insertDoctor = User::insertGetId($doctor);
            if(!empty($insertDoctor)){
                $doctorInfo['doctor_id'] =   $insertDoctor; 
                $doctorInfo['licence_id'] =   $request->licence_id; 
                $doctorInfo['specialist_id'] =   $request->specialist_id; 
                if($request->hasFile('document_image')){
                    $doctorInfo['document_image'] = $this->imageUpload($request->file('document_image'),'doctorImage');
                }
                $ins = DoctorInformation::create($doctorInfo);
            }
            DB::commit();
            return redirect()->back()->with('success','Account created successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function patientRegister(PatientRegisterRequest $request){
        DB::beginTransaction();
        try {
            // insert image using Trait method
            if($request->hasFile('image')){
                $patient['image'] = $this->imageUpload($request->file('image'),'patientImage');
            }
            $patient['name'] = $request->name;
            $patient['gender'] = $request->gender;
            $patient['email'] = $request->email;
            $patient['phone'] = $request->phone;
            $patient['password'] = bcrypt($request->password);
            $patient['location'] = $request->location;
            $patient['address'] = $request->address;
            $patient['is_admin'] = '0';
            $patient['user_type'] = 'patient';
            $insertPatient = User::insertGetId($patient);
            if(!empty($insertPatient)){
                $patientInfo['patient_id'] = $insertPatient; 
                $patientInfo['dob'] =   $request->dob; 
                $patientInfo['weight'] =   $request->weight; 
                $patientInfo['height'] =   $request->height; 
                $patientInfo['blood_pressure'] =   $request->blood_pressure?'1':'0'; 
                $patientInfo['blood_suger'] =   $request->blood_suger?'1':'0'; 
                $patientInfo['symptom'] =   $request->symptom?implode(',',$request->symptom):''; 
                $patientInfo['allergy'] =   $request->allergy?$request->allergy:''; 
                if($request->hasFile('lab_result')){
                    $patientInfo['lab_result'] = $this->imageUpload($request->file('lab_result'),'patientImage');
                }
                $ins = PatientInformation::create($patientInfo);
            }
            DB::commit();
            return redirect()->back()->with('success','Account created successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function patientLogin(Request $request){
        try{ 
			$input = $request->all();
			if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
			{
				if (auth()->user()->is_admin == 0 && auth()->user()->user_type == 'patient') {
                    auth()->user()->update(['device_key'=>$request->device_key]);
                    return response()->json(['success' => true,'html'=>'<div class="alert alert-success" role="alert">You Have Successfully Logged in to Takecare-med.</div>']);
				}else{
                    return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>You don't have patient portal access.</div>"]);
				}
			}else{
                return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>Invalid details! Please enter valid login details.</div>"]);
			}
		}
		catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
    }

    public function doctorLogin(Request $request){
        try{ 
			$input = $request->all();
			if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
			{
				if (auth()->user()->is_admin == 0 && auth()->user()->user_type == 'doctor') {
                    auth()->user()->update(['device_key'=>$request->device_key]);
                    return response()->json(['success' => true,'html'=>'<div class="alert alert-success" role="alert">You Have Successfully Logged in to Takecare-med.</div>']);
				}else{
                    return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>You don't have doctor portal access.</div>"]);
				}
			}else{
                return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>Invalid details! Please enter valid login details.</div>"]);
			}
		}
		catch(Exception $ex){
            return response()->json(['success' => false,'html'=>"<div class='alert alert-danger' role='alert'>".$ex->getMessage()."</div>"]);
		}
    }

    /**
     * Write code on Method
     *  patient logout
     * @return response()
     * 
     */
    public function patientLogout() {
        Auth::logout();
        return Redirect('home');
    }

    /**
     * Write code on Method
     *  doctor logout
     * @return response()
     * 
     */
    public function doctorLogout() {
        Auth::logout();
        return Redirect('home');
    }
}
