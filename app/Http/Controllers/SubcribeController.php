<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use Auth;
class SubcribeController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	
    public function postIndex(){
	    
  		
		
		$arr = $_POST;
		$body = "";
		foreach($arr as $key=>$value){
			$id=(int)$value;
			if($id>0){
				$body.=$id.',';
			}
			
		}
		$obj = new Subscribe;
		$obj->body = $body;
		$obj->user_id = Auth::user()->id;
		$obj->type= "new";
		$obj->save();
		return redirect('/');
		
	}
}
