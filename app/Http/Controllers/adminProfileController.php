<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adminProfileController extends Controller
{
    public function viewProfile(){
      if(session('handlerEmail') == null){
        return redirect()->route('login.Page');
      }
      else{
          return view('AdminView.adminHomePage.adminProfile');
      }
    }
    public function allInfoOfAdmin(){
      if(session('handlerEmail') == null){
        return redirect()->route('login.Page');
      }
      else{


          return view('AdminView.adminHomePage.adminProfile');
      }

    }



}
