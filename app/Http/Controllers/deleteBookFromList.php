<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class deleteBookFromList extends Controller
{
    public function deLeteBook(request $request){
      if(session('handlerEmail') == null){
        return redirect()->route('login.Page');
      }
      else{
        $bId = $request->input('bookId');
        DB::table('book_tables')->delete($bId);
        echo "Book is deleted successfully from Book List !";
      }
    }
}
