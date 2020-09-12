<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddModulesTable extends Migration
{
	public function up()
	{
		$attr = [
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'course_id' => [
				'type' => 'INT',
				'null' => true,
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			]

		];
		$this->forge->addField($attr);
		$this->forge->addKey('id', true);
		$this->forge->createTable('modules', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('modules');
	}
}
