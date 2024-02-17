<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    public function login(Request $request)
    {   
        try{ 
			$input = $request->all();
			if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
				if (auth()->user()->is_admin == 1) {
					return redirect()->route('dashboard');
				}else{
					return redirect()->back()
					->with('error',"You don't have admin access.");
				}
			}else{
				return redirect()->back()
					->with('error','Email-Address And Password Are Wrong.');
			}
		}
		catch(Exception $ex){
			echo $ex->getMessage();
		}
    }
}
