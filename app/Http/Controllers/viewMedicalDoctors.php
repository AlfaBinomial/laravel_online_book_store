<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;


class viewMedicalDoctors extends Controller
{
   	 public function allMedicalDoctorsList(){
   	 	if(session('handlerEmail') == null){
     		return redirect()->route('login.Page');
     	}
     	else{
     		$query = DB::table('registrations')->where('userType','Doctors')->get();
    		return view('AdminView.AllMedicalDoctorsList.medicalDoctorsList')->with('doctorsList',$query); 
     	}	
    }
}
