<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class viewPatientList extends Controller
{
    public function allPatientsList(){
    		if(session('handlerEmail') == null){
     			return redirect()->route('login.Page');
     		}
     		else{
     			$query = DB::table('registrations')->where('userType','Patient')->get();
    			return view('AdminView.AllPatientsList.allPatientsListview')->with('patientList',$query);
     		}
    }
}
