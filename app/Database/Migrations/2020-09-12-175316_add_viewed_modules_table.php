<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddViewedModulesTable extends Migration
{
	public function up()
	{
		$attr = [
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'module_id' => [
				'type' => 'INT',
				'null' => true,
			],
			'user_id' => [
				'type' => 'INT',
				'null' => true,
			],
			'course_id' => [
				'type' => 'INT',
				'null' => true,
			]
		];
		$this->forge->addField($attr);
		$this->forge->addKey('id', true);
		$this->forge->createTable('viewed_modules', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('viewed_modules');
	}
}
