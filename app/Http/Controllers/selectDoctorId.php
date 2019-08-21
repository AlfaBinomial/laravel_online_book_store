<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class selectDoctorId extends Controller
{
    public function searchId(request $request){
    	if(session('handlerEmail') == null){
            return redirect()->route('login.Page');
        }
        else{
            $doctorInformation = "";
            $doctorsList = "";
            $doctor_id = $request->input('doctorId');
            $type = "Doctors";
            $doctorInfo = DB::table('registrations')->where('userType','Doctors')->where('id',$doctor_id)->get();
            $query = DB::table('registrations')->where('userType','Doctors')->get();
            $count = count($doctorInfo);
            if($count > 0){
                return view('AdminView.AllMedicalDoctorsList.medicalDoctorsList')->with('doctorInformation',$doctorInfo)->with('doctorsList',$query);
            }   
            else{
                return '<h1>This Id is Not getting used By A Doctor !!</h1>';
            }   
        }
         		
    }
}
