<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLinkAndDescToModules extends Migration
{
	public function up()
	{
		//
		$fields = [
			'link' => ['type' => 'TEXT', 'null' => true,],
			'description' => ['type' => 'TEXT', 'null' => true,]
		];
		$this->forge->addColumn('modules', $fields);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
