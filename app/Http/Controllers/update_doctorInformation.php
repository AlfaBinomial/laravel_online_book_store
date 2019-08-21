<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class update_doctorInformation extends Controller
{
    public function updateDoctorInfo(request $request){
    	if(session('handlerEmail') == null){
            return redirect()->route('login.Page');
        }
        else{
        	$doctorMail = $request->input('doctor_mail');
    		$doctorContact = $request->input('doctorContact');
    		$userType = $request->input('user_type');
    		DB::update('update registrations set userContact = ? where userEmail=?',[$doctorContact,$doctorMail]);
    		echo "<h1>Doctor's Information is  Updated Successfully !!</h1>";
        }
    	
    }
}
