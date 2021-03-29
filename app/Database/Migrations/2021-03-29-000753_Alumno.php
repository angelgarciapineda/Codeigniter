<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alumno extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'alumno_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nombre'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'apellido_p'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'apellido_m'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'password'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'fecha_nac'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
		]);
		$this->forge->addKey('alumno_id', true);
		$this->forge->createTable('alumno');
	}

	public function down()
	{
		$this->forge->dropTable('alumno');
	}
}
?>