<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\support\Facades\DB;
class registration_insertion extends Controller
{
    public function userRegistraion(request $request){
         $this->validate($request,[
            'user_Name' => 'required|min:5|max:20',
            'user_Email' => 'required|email',
            'user_Contact' =>'required|max:11|min:11',
            'user_password'=> 'required|min:10',
        ]);
    	$name = $request->input('user_Name');
    	$email = $request->input('user_Email');
    	$contact = $request->input('user_Contact');
    	$password = $request->input('user_password');
        $confirmPassword = $request->input('user_Confirm_password');
    	$userType = "Customer";
        if($password == $confirmPassword){
            DB::insert('insert into user_registrations(id,userName,userEmail,userContact,userPassword,userType)values(?,?,?,?,?,?)',[null,$name,$email,$contact,$password,$userType]);
                echo "Registration is Successful";
        }
        else echo "<h1>password and Confirm Password field did not match</h1>";
        echo "<a href = 'http://localhost:8000/registrationPage'>Back</a>";

    }
}
