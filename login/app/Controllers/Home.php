<?php

namespace App\Controllers;
use App\Models\StudentModel;
use Kint\Parser\ToStringPlugin;

class Home extends BaseController
{
	public function index()
	{
		$msj = session('mensaje');
		return view('login/index', $msj);
	}

	public function conecta(){
		$email = $_POST['txtemail'];
		$pswrd = $_POST['txtpswrd'];

		$crud = new StudentModel();

		$respuesta = $crud->comprobarCred($email);

		if ($respuesta == $pswrd) {
			return redirect()->to(base_url().'/')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}
	}
}
?>