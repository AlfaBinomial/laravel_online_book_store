<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerView extends Controller
{
    public function customView(){
      return view('customerView.customerProfile.customerProfileInfo');
    }
}
