<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    public function index()
    {
        if(session('handlerEmail') == null){
        return redirect()->route('login.Page');
      }
      else{
         return view('AdminView.AjaxSearch.live_search');
      }
    }
   public function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {

       $data = DB::table('book_tables')
         ->where('BookName', 'like', '%'.$query.'%')
         ->orWhere('BookType', 'like', '%'.$query.'%')
         ->orWhere('BookPrize', 'like', '%'.$query.'%')
         ->orWhere('BookDescription', 'like', '%'.$query.'%')
         ->get();

      }
      else
      {
       $data = DB::table('book_tables')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->BookName.'</td>
         <td>'.$row->BookType.'</td>
         <td>'.$row->BookPrize.'</td>
         <td>'.$row->BookDescription.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
