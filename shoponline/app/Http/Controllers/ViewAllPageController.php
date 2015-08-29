<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;

class ViewAllPageController extends Controller {

	public function home(){
		$data = new Product();
		$getViewTenProductForHome = Product::getViewTenProductForHome($data);
		return view("pages.home")->with([
			       'getViewTenProductForHome' => $getViewTenProductForHome
			]);
	}
}
