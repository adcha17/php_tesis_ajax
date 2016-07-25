<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	

	 

	 


	public function get_login($_username,$_password )
	{

	  if (empty($_username))
			return FALSE;

		if (empty($_password))
		return FALSE;

	    $this->db->select('id,nombre_usuario');
		$this->db->where(
					array(
						'status !='=>99,
						'nombre_usuario' =>$_username,
						'password' =>$_password
					)
						
					);

		return $this->db->get('usuarios')->row();	
	}

	


}