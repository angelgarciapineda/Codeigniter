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
}
?>