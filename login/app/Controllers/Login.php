<?php

namespace App\Controllers;
use App\Models\StudentModel;
use Kint\Parser\ToStringPlugin;

class Login extends BaseController
{
	public function index()
	{
		$mensaje = session('mensaje');
		$data = [
			"msj"=>$mensaje
		];

		return view('login/index', $data);
		//return view('login/index');
	}

	public function conecta(){
		$email = $_POST['txtemail'];
		$pswrd = $_POST['txtpswrd'];

		$crud = new StudentModel();

		$respuesta = $crud->comprobarCred($email, $pswrd);

		if ($respuesta == true) {
			return redirect()->to(base_url().'/')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}
	}
}
?>