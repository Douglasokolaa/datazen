<?php

namespace App\Controllers;

use App\Models\ModulesModel;
use App\Models\User;
use App\Models\ViewsModel;

class Home extends BaseController
{
	public function index()
	{
		return view('auth/login', ['title' => 'Login']);
	}

	public function view($course_id, $module_id)
	{
		$viewModel = new ViewsModel();

		$model = new ModulesModel();
		$user_id = get_logged_in_user_id();

		$module = $model->find($module_id);

		if ($module['course_id'] !== $course_id) {
			return view('errors/html/error_404');
		}

		$isViewedAlready = $viewModel->where(['user_id' => $user_id, 'module_id' => $module_id])->first();
		if (!$isViewedAlready) {
			$model = $viewModel->save([
				'user_id' => $user_id,
				'course_id' => $course_id,
				'module_id' => $module_id,
			]);
		}
		return redirect()->redirect($module['link']);
	}

	public function profile()
	{
		$data = [];

		$id = get_logged_in_user_id();
		$model = new User();
		$user = $model->find($id);

		if (!$user) {
			return redirect()->to('/logout');
		}
		$data['user'] = $user;

		return view('profile', $data);
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
