<?php

namespace App\Controllers;
use App\Models\StudentModel;

class StudentController extends BaseController
{
	public function index()
	{
		$crud = new StudentModel();
		$datos = $crud->getStudents();

		$data = [
			"datos"=>$datos
		];
		return view('student/index', $data);
	}
}
?>