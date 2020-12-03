<?php namespace App\Controllers;

class MiTarjeta extends BaseController
{
	public function index()
	{
		$data = [
                        'titulazo' => ucfirst("Bienvenido a esta madre")
                ];


	    echo view('template/jeder', $data);
	    echo view('paso1');
	    echo view('template/futer');

	}

	//--------------------------------------------------------------------

}
