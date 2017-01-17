<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mlogin');
		
		
	}

	
	public function index()
	{
		$this->load->view('vLogin');
	}

	public function ingresar(){
		//RECUPERAMOS LOS DATOS DEL FORM

		$user=	$this->input->post('Txtusuario');
		$pass=	$this->input->post('Txtpass');

		

//MANDAMOS LOS DATOS A LOGIN PARA REALIZAR LAS QUERYS CORRESPONDIEMTES
		$res=$this->mlogin->ingresar($user,$pass);//OBTENEMOS 1 O 0 DEL MODELO 
		if ($res==1) {
//MANDAMOS AL USUARIO A LA PAGINA DE INGRESO
			


			$this->load->view('ok');
		

		}else
		{
			//SI EL USUARIO NO EXISTE SE VUELVE ENVIAR A LA PAGINA vLogin
			$this->load->view('vLogin');
		}

		



	}

	
}
