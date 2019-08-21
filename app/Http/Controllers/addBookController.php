<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class addBookController extends Controller
{
    public function insertBooks(){
      return view('AdminView.addBookInfo.bookInsertion');
    }

}
