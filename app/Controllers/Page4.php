<?php namespace App\Controllers;

class Page4 extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('templates/header', $data);
		echo view('page4');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
