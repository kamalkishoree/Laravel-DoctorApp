<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialist;

class HomeController extends Controller
{
    /**
     * home page access
     */

     public function index(){
        $specialist = [];
        $specialist = Specialist::select(['id','specialist','image'])
            ->orderBy("id", "asc")
            ->get();
        $data['specialist'] = $specialist;
        return view('frontend/index',['data' => $data]);
     }

     public function doctorSignUp(){
        $specialist = [];
        $specialist = Specialist::select(['id','specialist','image'])
            ->orderBy("id", "asc")
            ->get();
        $data['specialist'] = $specialist;
        return view('frontend/doctorRegister',['data' => $data]);
     }

    
}
