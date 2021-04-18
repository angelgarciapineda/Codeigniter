<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
	public function getDegree()
	{
		$degrees = $this->db->query("select specialization_id, concat(degree,' : ', specialization) as division from specialization inner join degree on degree.degree_id = specialization.degree_id;");
		return $degrees->getResult();
	}

	public function getStudentInfo(){
		$studentInfo = $this->db->query("SELECT * FROM consultaStudentInfo");
		return $studentInfo->getResult();
	}

	public function getGroups(){
		$groups = $this->db->query("SELECT * FROM gruposInfo");
		return $groups->getResult();
	}

	public function getSpecializations()
	{
		$specializations = $this->db->query("SELECT * FROM specialization");
		return $specializations->getResult();
	}

	public function getCuatris()
	{
		$cuatrimestres = $this->db->query("SELECT * FROM consultaCuatris");
		return $cuatrimestres->getResult();
	}

	public function getListGroups($date1, $date2){
		$groups = $this->db->query("select grouputp_id , concat(four_month_period.fmp_number, ' ', letter.letter, ' ', grouputp.shift) as grupo
		from grouputp
		inner join letter on grouputp.letter_id=letter.letter_id
		inner join four_month_period on grouputp.fmp_id=four_month_period.fmp_id
		inner join period on four_month_period.period_id=period.period_id
		where period.start_month = '$date1' and period.end_month = '$date2'");
		return $groups->getResult();
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

	public function AddStudentGroup($datos)
	{
		$student = $this->db->table('student_group');
		$student->insert($datos);
		if ($student) {
			$last_id=1;
		} else {
			$last_id = 0;
		}
		return $last_id;
	}

	public function comprobarCred($email, $pass) {
		$resul=$this->db->table('student');
		$resul->where('email', $email);

		$p = "";
		$id = 0;
		$mark = 0; 
		$r = false;

		$row = $resul->get()->getRow();

		if (isset($row))
		{
			$p = $row->psword;
			$id = $row->student_id;
			$mark = $row->high_school_mark;
		}

		if($p == $pass){
			$r = true;
			session()->set('id_user',$id);
			session()->set('mark',$mark);
		} else {
			$r = false;
		}

		return $r;
	}

	public function addStudentGroupDef($grupo, $student){
		$groups = $this->db->query("UPDATE student_group SET 
		grouputp_id = $grupo
		WHERE
		student_id = $student;");

		if ($groups) {
			$last_id=1;
		} else {
			$last_id = 0;
		}
		return $last_id;
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
