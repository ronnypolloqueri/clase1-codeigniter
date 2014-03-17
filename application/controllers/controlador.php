<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador extends CI_Controller {
	public function saludo(){
		$data = array();
		$data["nombre"] = "Ronny";
		$data["ape"] = "Polloqueri";
		$this->load->view("saludo", $data);
	}

	public function formulario(){
		$this->load->view("formulario_ingreso");
	}
}
 ?>