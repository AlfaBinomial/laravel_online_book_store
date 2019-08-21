<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;

class delete_doctorsInfo extends Controller
{
    public function doctorDelete(request $request){
    	if(session('handlerEmail') == null){
     		return redirect()->route('login.Page');
     	}
     	else{
     		$this->validate($request,['Doctors_userId' => 'required']);
    		$doctorId = $request->input('Doctors_userId');
    		DB::table('registrations')->delete($doctorId);
    		echo "Doctor is deleted successfully from Doctor List !";
    		echo "<a href = 'http://localhost:8000/registerList/medicalDoctorsList'>Back</a>";
     	}
    	
    }
}
