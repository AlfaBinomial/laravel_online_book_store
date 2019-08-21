<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class loginUser extends Controller
{
  //user_registrations
    public function uservarification(request $request){
        $this->validate($request,[
            'login_email' => 'required|email',
            'login_password' => 'required'
        ]);
      $logEmail= $request->input('login_email');
    	$logPassword = $request->input('login_password');
    	$query =  DB::select('select id from user_registrations where userEmail=? and userPassword =?',[$logEmail,$logPassword]);
    	$count = count($query);
      if($count == 1 && $logEmail == "ruhul@bravo.com" && $logPassword == "admin"){
          $request->session()->put('handlerEmail',$logEmail);
          return redirect()->route('admin.profile');
      }
      else if($count >0 ){
          return redirect()->route('customerView.profile');
      }
    	else {
    		$request->session()->flash('message','Invalid User Name or Password !');
    		return redirect()->route('login.Page');
    	}
    }
}
