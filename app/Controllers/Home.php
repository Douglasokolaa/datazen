<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('auth/register',['title' => 'Register']);
	}

	//--------------------------------------------------------------------

}
