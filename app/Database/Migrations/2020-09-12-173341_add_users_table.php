<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsersTable extends Migration
{
	public function up()
	{
		//
		$this->db->query("
		CREATE TABLE IF NOT EXIST `users` (
			`id` int(11) NOT NULL,
			`name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
			`email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
			`password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
			`phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
			`organization` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
			`course` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
			`hours` int(11) DEFAULT NULL,
			`created` datetime NOT NULL,
			`modified` datetime NOT NULL,
			`status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
			`pass_reset_token` text COLLATE utf8_unicode_ci,
			`verify_token` text COLLATE utf8_unicode_ci
		  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;		  
		");

		$this->db->query("
			ALTER TABLE `users`
			ADD PRIMARY KEY (`id`);
		");

		$this->db->query("
			ALTER TABLE `users`
			MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
			COMMIT;
		");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
