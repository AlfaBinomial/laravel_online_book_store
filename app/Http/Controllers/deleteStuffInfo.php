<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class deleteStuffInfo extends Controller
{
    public function deletStuff(request $request){
    	if(session('handlerEmail') == null){
     		return redirect()->route('login.Page');
     	}
     	else{
     		$Stuff = $request->input('Stuff_userId');
    		DB::table('registrations')->delete($Stuff);
    		echo "Stuff is deleted successfully from Stuff List !";
    		echo "<a href = 'http://localhost:8000/registerList/officeStuffList'>Back</a>";
     	}
    	
    }
}
