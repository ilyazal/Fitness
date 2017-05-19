<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use App\Categories;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	 
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$obj = Subscribe::where('user_id',Auth::user()->id)->orderBy('id','DESC')->first();
		$cats = explode(',',$obj->body);
		$cat=[];
		foreach($cats as $key=>$value){
			$id=(int)$value;
			if($id>0){
			$cat[]= Categories::find($id);	
			}
			
			
		}
		
        return view('home')->with('cat',$cat);
    }
}
