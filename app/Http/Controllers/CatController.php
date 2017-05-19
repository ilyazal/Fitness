<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Tovars;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function getOne($id=0){
		$category = Categories::find($id);
		return view('cat')->with('category',$category);
		
	}
	
	public function getProduct($id=0){
		$tovar = Tovars::find($id);
		return view('product')->with('tovar',$tovar);
	}
}
