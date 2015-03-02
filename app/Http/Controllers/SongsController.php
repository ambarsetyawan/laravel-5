<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session; 
use App\Songs;
class SongsController extends Controller{
public function index(){
$singer=Songs::orderBy('id','DESC')->paginate(6);
	//dd($songs);
	return View('show.songs',compact('singer'));

   }
 public function details_info($id){
  $songs_display_details=Songs::find($id);
   return view('show.details',compact('songs_display_details'));
   }  

   public function delete($id)
   {
   	$songs=Songs::find($id);
   	$songs->delete();
   	return View('show.delete');
   }
   public function getadd(){
   	return View('show.add');
   }
   public function add(){
   $so=new Songs;
   $so->title= Input::get('title');
   $so->lyrics= Input::get('lyrics');
   //$so->image=Input::file('image');

   $file = Input::file('image');
   $destinationPath = 'public/uploads';
   $filename = $file->getClientOriginalName();
   Input::file('image')->move($destinationPath, $filename);
   $so->image=$filename;
   $so->save();
  return View('show.successfull');
}

 public function edit($id){
 $edit=Songs::find($id);
 return view('show.edit',compact('edit'));
  }

public function update($id){

$update=Songs::find($id);
//if($update){
$update->title=Input::get('title');
$update->lyrics=Input::get('lyrics');
$update->save();
return view('show.songs');
//}else{
//	return"error";
//}

 }


 public function search(){

 $title=Input::get('character');
 $searchResult=Songs::where('title', 'LIKE', '%'.$title.'%')->get();
 return view('show.search',compact('searchResult'))
->with('title',$title)
->with('searchResult',$searchResult);


}

public function home(){
	return view('show.home');
}

 }
