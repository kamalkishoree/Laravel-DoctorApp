<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialist;
use Exception;
use DB;
use App\Http\Traits\ImageUploadeTrait;
DB::enableQueryLog();

class SpecialityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    use ImageUploadeTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialist = [];
        $specialist = Specialist::select('*')
                ->orderBy('id','DESC')
                ->get();
        $data['specialist'] =$specialist;
        return view('backend.speciality.specialityList',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.speciality.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'specialist' => 'required',
            ]);
            $ins['specialist'] = $request->specialist;
            if($request->hasFile('image')){
                $ins['image'] = $this->imageUpload($request->file('image'),'specialistImage');
            }
            $upValue =  specialist::insert($ins);
            if($upValue){
                return redirect()->route('speciality-list')->with('success','Speciality updated successfully');
            }
            return redirect()->back()->with('error','Please try after some time');
            }
            catch(Exception $ex){
                return redirect()->back()->with('error',$ex->getMessage());
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speciality = "";
        $speciality = Specialist::select('*')
                        ->where('id',$id)
                        ->first();
       
        return view('backend.speciality.editSpeciality',['data'=>$speciality]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Specialist $id)
    {
        try{
        $request->validate([
            'specialist' => 'required',
        ]);
        $ins['specialist'] = $request->specialist;
        if($request->hasFile('image')){
            $ins['image'] = $this->imageUpload($request->file('image'),'specialistImage');
        }
        $upValue =  $id->update($ins);
        if($upValue){
            return redirect()->route('speciality-list')->with('success','Speciality updated successfully');
        }
        return redirect()->back()->with('error','Please try after some time');
        }
        catch(Exception $ex){
            return redirect()->back()->with('error',$ex->getMessage());
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function specialistDelete(Specialist $id)
    {
        try{
            $id->delete();
            return redirect()->back()->with('success','Speciality deleted successfully!');
        }
        catch(Exception $ex){
            return redirect()->back()->with('error',$ex->getMessage());
        }
    }
}
