<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

//OBTENEMOS LOS VALORES DEL CONTROLADOR CORRESPODIENTES DEL FORM DEL VLOGIN
	public function ingresar($user,$pass)
	{
		//REALIZAMOS LAS QUERYS CORRESPONDIENTES PARA REVISAR SI EL USUARIO EXISTE
		$this->db->select('id','user','pass');
		$this->db->from('usuarios');
		$this->db->where('user',$user);
		$this->db->where('pass',$pass);
		$resultado =$this->db->get();
		if ($resultado->num_rows()==1) {
			$r=$resultado->row();
			//GUARDAMOS LOS DATOS EN SESSION
			$s_usuario = array('s_id' =>$r->id ,
				'username' =>$user
				);
			$this->session->set_userdata($s_usuario);

			//SE ENVIA 1 SI EXISTE EL USER 0 SI NO EXISTE
			return 1;
		}else{
			return 0;
		}
	}
	




}
?>

