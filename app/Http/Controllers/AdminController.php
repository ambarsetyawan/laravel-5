<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Songs;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller{

	public function getlogin(){
     return view('show.login');
	}
	public function postlogin(){
 $rules=array('username'=>'required','password'=>'required');
 $Validator=Validator::make(Input::all(),$rules);
 if($Validator->fails()){
 	return Redirect::route('login')->withErrors($Validator);

 }
 $auth=Auth::attempt(array(
'username'=>Input::get('username'),
'password'=>Input::get('password')
 	),false);
 if(!$auth){
 	return Redirect::route('login')
 	->withErrors(array(
 		'Invalid   username or password'));
 }

return Redirect::route('index-page');

	}

	public function getSignOut() {

    Auth::logout();
    return Redirect::route('index-page');

}

}