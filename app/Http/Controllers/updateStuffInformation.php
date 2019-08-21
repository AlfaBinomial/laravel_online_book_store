<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class updateStuffInformation extends Controller
{
    public function updateStuff(request $request){
    	if(session('handlerEmail') == null){
            return redirect()->route('login.Page');
        }
        else{
        	$this->validate($request,[
            'stuff_mail' => 'required|email',
            'StuffContact' => 'required|max:11|min:11'
	        ]);
	    	$StuffMail = $request->input('stuff_mail');
	    	$stuffContact = $request->input('StuffContact');
	    	DB::update('update registrations set userContact = ? where userEmail=?',[$stuffContact,$StuffMail]);
	    	echo "<h1>Stuff's Information is  Updated Successfully !!</h1>";
        }
    	
    }
}
