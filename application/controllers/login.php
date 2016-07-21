<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		
		$this->controller = strtolower(get_class($this));
		$this->data['controller'] = $this->controller;


	}
	/*
 	  FUNCION CARGAR EL FORMULARIO ADD
 	*/
	public function index()
    {
    	

        $this->load->view( $this->controller.'/load_login',$this->data);
    }

   
 	

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */