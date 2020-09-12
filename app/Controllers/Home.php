<?php

namespace App\Controllers;

use App\Models\ModulesModel;
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
}
