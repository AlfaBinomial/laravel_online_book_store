<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveSearchCustomer extends Controller
{
  public function index()
  {
      if(session('handlerEmail') == null){
      return redirect()->route('login.Page');
    }
    else{
       return view('AdminView.AjaxSearch.live_search_customer');
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
      //id	customerName	customerEmail	customerContact	customerBookOrderList	customerPrizeList

     $data = DB::table('customer_tables')
       ->where('customerName', 'like', '%'.$query.'%')
       ->orWhere('customerEmail', 'like', '%'.$query.'%')
       ->orWhere('customerContact', 'like', '%'.$query.'%')
       ->orWhere('customerBookOrderList', 'like', '%'.$query.'%')
        ->orWhere('customerPrizeList', 'like', '%'.$query.'%')
       ->get();

    }
    else
    {
     $data = DB::table('customer_tables')
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
       <td>'.$row->customerName.'</td>
       <td>'.$row->customerEmail.'</td>
       <td>'.$row->customerContact.'</td>
       <td>'.$row->customerBookOrderList.'</td>
       <td>'.$row->customerPrizeList.'</td>
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
