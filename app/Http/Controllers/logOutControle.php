<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logOutControle extends Controller
{
    public function logOut(Request $request){
    	$request->session()->flush();
    	return redirect()->route('login.Page');
    }
}
