<?php

namespace App\Controllers;
use App\Models\StudentModel;

class StudentController extends BaseController
{
	/* public function index()
	{
		$crud = new StudentModel();
		$datos = $crud->getStudents();

		$data = [
			"datos"=>$datos
		];
		return view('student/index', $data);
	} */
	public function index(){
		$crud = new StudentModel();
		$mensaje = session('mensaje');
		$datos = $crud->getSpecializations();

		$data = [
			"datitos"=>$datos,
			"msj"=>$mensaje
		];
		return view('register/index', $data);
	}

	public function verifpswrd(){
	}

	public function addStudent() {
		$datos = [
					"student_name" => $_POST['txtname'],
					"last_name" => $_POST['txtlast'],
					"mother_last_name" => $_POST['txtmother'],
					"date_of_birth" => $_POST['txtdate'],
					"high_school_mark" => $_POST['txtmark'],
					"email" => $_POST['txtemail'],
					"phone" => $_POST['txtphone'],
					"psword"=> $_POST['txtpswrd'],
					"student_status" => 1,
					"specialization_id" => $_POST['txtspecialization'],
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date('Y-m-d')
				];
		$crud = new StudentModel();
		$respuesta = $crud->AddStudent($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url().'/register')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/register')->with('mensaje','0');
		}

	}
}
?>