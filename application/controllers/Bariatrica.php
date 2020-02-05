<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bariatrica extends CI_Controller {

	public function index()
	{
		// $datos['resgistros'] = $this->M_construct->consulta();
		$datos = '';
	 	$content = $this->load->view('welcome_message',$datos,TRUE);
        $datos_vista = array('content' => $content);
        $this->load->view('template',$datos_vista); 
		// $this->load->view('welcome_message');
	}
}
