<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;

use App\User;


class DashboardController extends AdminController {

	public function index()
	{
		return view('admin.pages.dashboard');
	}
}