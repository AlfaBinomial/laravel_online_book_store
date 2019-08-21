<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class admin_notice extends Controller
{
	
    
    	 public function insertNotice(request $request){
    	 	if(session('handlerEmail') == null){
     			return redirect()->route('login.Page');
     		}
     		else{
     			return view('AdminView.AdminNoticeList.adminNoticeCreation');
     		}
    		
    	}
   
   
   
}
