<?php

namespace App\Controllers;

class Courses extends BaseController
{

  protected $data = [];

  public function __construct()
  {
    helper('general');
  }

  public function index()
  {
    $this->data['title'] = '';
    return view('learn', $this->data);
  }

  public function customer_service()
  {
    $this->data['title'] = 'Customer Service Specialist';
    return view('learn/customer_service_specialist', $this->data);
  }

  public function data_analyst()
  {
    $this->data['title'] = 'Data analyst';
    return view('learn/data_analyst', $this->data);
  }

  public function it_administrator()
  {
    $this->data['title'] = 'IT Administrator';
    return view('learn/it_administrator', $this->data);
  }

  public function it_support()
  {
    $this->data['title'] = 'IT Support/ help desk';
    return view('learn/it_support_help_desk', $this->data);
  }

  public function sales_representative()
  {
    $this->data['title'] = 'Sales Representative';
    return view('learn/sales_representative', $this->data);
  }

  public function software_developer()
  {
    $this->data['title'] = 'Software Devloper';
    return view('learn/software_developer', $this->data);
  }
}
