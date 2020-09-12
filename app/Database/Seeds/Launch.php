<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Launch extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'John Doe',
			'email'    => 'user@datazen.test',
			'password' => '$2y$10$g8fAw8vAJe15O8iiGfGHce8ytv7jA.nCBoTS9xZh8OEQna5pczaj.',
			'phone'    => '08130488941',
			'organization'    => 'xyz cust LTD',
			'course'    => '2',
			'hours'    => 3,
			'status'    => '1',
		];
		$this->db->table('users')->insert($data);
		$this->call('courses');
		$this->call('modules');
	}
}
