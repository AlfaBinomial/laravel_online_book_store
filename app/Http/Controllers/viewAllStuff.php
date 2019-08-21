<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class viewAllStuff extends Controller
{
      public function allHospitalStuffList(){
      	if(session('handlerEmail') == null){
     		return redirect()->route('login.Page');
     	}
     	else{
      		$query = DB::table('registrations')->where('userType','Stuff')->get();
    		return view('AdminView.AllHospitalStuff.allHospitalStuff')->with('StuffList',$query);
     	}
    }
}
