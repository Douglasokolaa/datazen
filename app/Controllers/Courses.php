<?php namespace App\Controllers;

class Courses extends BaseController
{
    public function __construct()
    {

    }

	public function index()
	{
		return view('learn');
    }
    
    public function customer_service()
    {
		return view('learn/customer_service_specialist');

    }

    public function data_analyst()
    {
		return view('learn/data_analyst');

    }

    public function it_administrator()
    {
        return view('learn/it_administrator');

    }

    public function it_support()
    {
		return view('learn/it_support_help_desk');

    }

    public function sales_representative()
    {
		return view('learn/sales_representative');

    }

    public function software_developer()
    {
		return view('learn/software_developer');

    }
	//--------------------------------------------------------------------

}
