<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class RegisterController extends BaseController
{
	public function index()
	{
		$crud = new RegisterModel();
		$datos = $crud->getStudents();

		$data = [
			"datos"=>$datos
		];
		return view('register/index', $data);
	}
}
?>