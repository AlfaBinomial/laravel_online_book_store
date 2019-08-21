<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class admin_notice_insertion extends Controller
{
     public function insert_allNotice(request $request){
     	if(session('handlerEmail') == null){
     		return redirect()->route('login.Page');
     	}
     	else{
     		 $this->validate($request,[
            'notice_date' => 'required',
            'user_Type_Notice' => 'required',
            'Notice_discription' =>'required|max:1000|min:10'
        ]);
    	$noticeDate = $request->input('notice_date');
    	$noticeType = $request->input('user_Type_Notice');
    	$NoticeInfo = $request->input('Notice_discription');
    	DB::insert('insert into admin_notices(id,Date,userType,notice_Description)values(?,?,?,?)',[null,$noticeDate,$noticeType,$NoticeInfo]);
    	echo "Notice has been posted successfully ! ";
    	echo "<a href = 'http://localhost:8000/registerList/OnNoticeOperation'>Back</a>";
     } 	
    }
}
