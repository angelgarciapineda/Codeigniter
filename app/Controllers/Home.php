<?php

namespace App\Controllers;

use App\Models\StudentModel;
use Kint\Parser\ToStringPlugin;

class Home extends BaseController
{
	public function index()
	{
		$crud = new StudentModel();
		$mensaje = session('mensaje');
		$cuatris = $crud->getCuatris();

		$data = [
			"cuatris" => $cuatris,
			"msj"=>$mensaje
		];
		return view('home/inicio', $data);
	}

	public function addStudentGroup()
	{
		$datos = [
			"grouputp_id" => $_POST['txtcuatri'],
			"student_id" => session('id_user'),
			"mark" => session('mark'),
			"sg_year" => date('Y')
		];
		$crud = new StudentModel();
		$respuesta = $crud->AddStudentGroup($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url().'/home')->with('mensaje','1');
			$this->session->sess_destroy();
		} else {
			return redirect()->to(base_url().'/home')->with('mensaje','0');
		}
	}

	public function indexGroups(){
		$crud = new StudentModel();
		$mensaje = session('mensaje');

		$student = $crud->getStudentInfo();
		$grupos = $crud->getGroups();

		$data = [
			"grupos" => $grupos,
			"student" => $student,
			"msj"=>$mensaje
		];
		return view('home/groups', $data);
	}

	public function addStudentGroupDef(){
		$student = $_POST['txtstudent'];
		$group = $_POST['txtgrupo'];

		$crud = new StudentModel();
		$respuesta = $crud->addStudentGroupDef($group, $student);

		if ($respuesta > 0) {
			return redirect()->to(base_url().'/home/groups')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/home/groups')->with('mensaje','0');
		}
	}
}
