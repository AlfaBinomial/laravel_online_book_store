<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class allNoticeView extends Controller
{
    public function showNotices(){
    	if(session('handlerEmail') == null){
     			return redirect()->route('login.Page');
     	}
     	else{
     		$notices = DB::table('admin_notices')->get();
    		return view('viewFolders.noticeView.allNoticeView')->with('notices',$notices);
     	}
    }
}
