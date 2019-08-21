<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class insertBooksItem extends Controller
{
  public function insertingAll(Request $request){
      print_r($request->input());
      $this->validate($request,[
         'bookName' => 'required',
         'booksType' => 'required',
         'book_prizee' =>'required',
         'book_description'=> 'required|min:10',
     ]);
   $bookName = $request->input('bookName');
   $bookType = $request->input('booksType');
   $book_prize = $request->input('book_prizee');
   $book_desc = $request->input('book_description');
   DB::insert('insert into book_tables(id,BookName,BookType,BookPrize,BookDescription)values(?,?,?,?,?)',[null,$bookName,$bookType,$book_prize,$book_desc]);
   echo "<h1>Book Insert Successfully</h1>";
 }
}
