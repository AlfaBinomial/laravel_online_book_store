<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function firstPage(){
    	return view('viewFolders.FirstPage.index');
    }
    public function registraionPage(){
    	return view('viewFolders.RegistrationPage.registrationPage');
    }
    public function loginPage(){
    	return view('viewFolders.LogInPage.login_page');
    }
}
