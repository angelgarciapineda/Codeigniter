<?php

namespace App\Controllers;

use App\Models\StudentModel;
use Kint\Parser\ToStringPlugin;

class Home extends BaseController
{
	public function index()
	{
		return view('home/inicio');
	}


	public function getGroups()
	{
		$date = $_POST['txtcuatri'];

		$monthStart = "";
		$monthEnd = "";
		$mensaje = session('mensaje');
		$crud = new StudentModel();
		
		if($date == 1){
			$monthStart = "Enero";
			$monthEnd = "Abril";
		} else if($date == 2){
			$monthStart = "Mayo";
			$monthEnd = "Agosto";
		} else if($date == 3){
			$monthStart = "Septiembre";
			$monthEnd = "Diciembre";
		}
		$datos = $crud->getListGroups($monthStart, $monthEnd);
		$data = [
			"groups" => $datos,
			"msj" => $mensaje
		];
		return view('home/groups', $data);
	}

	public function addStudentGroup()
	{
		$datos = [
			"grouputp_id" => $_POST['txtgroup'],
			"student_id" => session('id_user'),
			"mark" => session('mark'),
			"sg_year" => date('Y')
		];
		$crud = new StudentModel();
		$respuesta = $crud->AddStudentGroup($datos);

		if ($respuesta > 0) {
			return view('home/groups');
			$this->session->sess_destroy();
		} else {
			return view('home/groups');
		}
	}
}
