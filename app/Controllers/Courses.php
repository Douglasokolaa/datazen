<?php

namespace App\Controllers;

use App\Models\ModulesModel;
use App\Models\ViewsModel;

define('SOFTWARE_DEVELOPER', 1);
define('IT_ADMINISTRATOR', 2);
define('CUSTOMER_SERVICE', 3);
define('SALES_REPRESENTATIVE', 4);
define('DATA_ANALYST', 5);
define('IT_SUPPORT', 6);
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
    $this->prepare_data(CUSTOMER_SERVICE);
    $this->data['title'] = 'Customer Service Specialist';
    return view('learn/customer_service_specialist', $this->data);
  }

  public function data_analyst()
  {
    $this->prepare_data(DATA_ANALYST);
    $this->data['title'] = 'Data analyst';
    return view('learn/data_analyst', $this->data);
  }

  public function it_administrator()
  {
    $this->prepare_data(IT_ADMINISTRATOR);
    $this->data['title'] = 'IT Administrator';
    return view('learn/it_administrator', $this->data);
  }

  public function it_support()
  {
    $this->prepare_data(IT_SUPPORT);
    $this->data['title'] = 'IT Support/ help desk';
    return view('learn/it_support_help_desk', $this->data);
  }

  public function sales_representative()
  {
    $this->prepare_data(SALES_REPRESENTATIVE);
    $this->data['title'] = 'Sales Representative';
    return view('learn/sales_representative', $this->data);
  }

  public function software_developer()
  {
    $this->prepare_data(SOFTWARE_DEVELOPER);
    $this->data['title'] = 'Software Devloper';
    return view('learn/software_developer', $this->data);
  }

  protected function prepare_data($course_id)
  {

    $_modules = new ModulesModel();
    $this->data['modules'] = $_modules->where('course_id', $course_id)->findAll();
    $total_modules = count($this->data['modules']);
    $this->check_progress($course_id, $total_modules);
  }

  protected function check_progress($course_id, $total_modules)
  {
    $user_id = get_logged_in_user_id();
    $_views = new ViewsModel();

    $viewed_courses = $_views->where([
      'course_id' => $course_id,
      'user_id' => $user_id
    ])->findAll();

    $total_viewed = count($viewed_courses);
    $percentage = (float) (($total_viewed / $total_modules) * 100);

    $this->data['progress']['value'] = $total_viewed;
    $this->data['progress']['percentage'] = $percentage;
  }
}
