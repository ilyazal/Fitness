<?php
namespace App\Providers\ViewComposers;
use illuminate\Contracts\View\View;
use App\Categories;
class BaseComposer{
	public function compose(View $view){
	$cats = Categories::where('showhide','show')->get();
    $view->with('cats',$cats);	
		
	}
	
}