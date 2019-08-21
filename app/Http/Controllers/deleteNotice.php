<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class deleteNotice extends Controller
{
    public function noticeDeleting(request $request){
    	if(session('handlerEmail') == null){
     		return redirect()->route('login.Page');
     	}
     	else{
     		$noticeId = $request->input('delete_notice');
     		DB::table('admin_notices')->delete($noticeId);
    		echo "Notice is deleted successfully !";
    		echo "<a href = 'http://localhost:8000/registerList/OnNoticeOperation'>Back</a>";
     	}
    	
    }
}
