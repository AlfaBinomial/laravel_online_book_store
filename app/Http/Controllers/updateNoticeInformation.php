<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class updateNoticeInformation extends Controller
{
    public function UpdateNotice(request $request){
    	if(session('handlerEmail') == null){
            return redirect()->route('login.Page');
        }
        else{
        	$this->validate($request,[
            'update_noticeId' => 'required',
            'update_Notice_discription' => 'required|max:1000|min:10'
	        ]);
	    	$noticeId = $request->input('update_noticeId');
	    	$notice_description = $request->input('update_Notice_discription');
	    	DB::update('update admin_notices set notice_Description = ? where id =?',[$notice_description,$noticeId]);
	    	echo "Notice is Updated Successfully !!";
        }
    }
}



