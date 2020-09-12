<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCoursesTable extends Migration
{
	public function up()
	{
		$attr = [
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'modules' => [
				'type'           => 'bigint',
				'null'           => true,
			],

		];
		$this->forge->addField($attr);
		$this->forge->addKey('id', true);
		$this->forge->createTable('courses', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('courses');
	}
}
