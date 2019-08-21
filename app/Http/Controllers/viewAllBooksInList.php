<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class viewAllBooksInList extends Controller
{
    public function showBooksList(){
      if(session('handlerEmail') == null){
     		return redirect()->route('login.Page');
     	}
     	else{
        $allBooks = DB::table('book_tables')->get();
    		return view('AdminView.allBooksList.booksList')->with('allBooks',$allBooks);
     	}
    }
}
