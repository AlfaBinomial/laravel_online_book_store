<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\registration;
use Illuminate\support\Facades\DB;
class RegistrationController extends Controller
{
     public function register(){
     	if(session('handlerEmail') == null){
     		return redirect()->route('login.Page');
     	}
     	else{
        $registers = DB::table('user_registrations')->get();
    		return view('AdminView.AllusersList.allregisteredList')->with('registers',$registers);
     	}

    }
}
