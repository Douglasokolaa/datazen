<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Courses extends Seeder
{
	public function run()
	{
		$data[] = [
			'title' => 'Software Developer',
			'modules' => '8',
		];
		$data[] = [
			'title' => 'IT Administrator',
			'modules' => '8',
		];
		$data[] = [
			'title' => 'Customer Service Specialist',
			'modules' => '8',
		];
		$data[] = [
			'title' => 'Sales Representative',
			'modules' => '8',
		];
		$data[] = [
			'title' => 'Data analyst',
			'modules' => '7',
		];
		$data[] = [
			'title' => ' IT Support/ help desk',
			'modules' => '8',
		];
		foreach ($data as $course) {
			$this->db->table('courses')->insert($course);
		}
	}
}
