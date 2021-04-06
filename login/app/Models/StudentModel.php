<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
	public function getSpecializations()
	{
		$specializations = $this->db->query("SELECT * FROM specialization");
		return $specializations->getResult();
	}

	public function AddStudent($datos)
	{
		$student = $this->db->table('student');
		$student->insert($datos);
		if ($student) {
			//$last_id = $this->db->query("SELECT MAX(student_id) FROM student");
			$last_id=1;
		} else {
			$last_id = 0;
		}
		//return $this->db->insertID();
		return $last_id;
	}

	public function comprobarCred($email) {
		$resul=$this->db->table('student');
		$resul->where('email', $email);

		$p = "";

		foreach ($resul->get()->getResultArray() as $row)
		{
			$p = $row['psword'];
		}

		return $p;
	}

	/* public function obtenerNombre($data) {
			$Nombres =  $this->db->table('t_personas');
			$Nombres->where($data);
			return $Nombres->get()->getResultArray();
		}

		public function actualizar($data, $idNombre) {
			$Nombres = $this->db->table('t_personas');
			$Nombres->set($data);
			$Nombres->where('id_nombre', $idNombre);
			return $Nombres->update();
		}

		public function eliminar($data) {
			$Nombres = $this->db->table('t_personas');
			$Nombres->where($data);
			return $Nombres->delete();
		} */
}
