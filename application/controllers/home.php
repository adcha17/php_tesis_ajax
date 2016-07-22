<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		
		$this->controller = strtolower(get_class($this));
		$this->data['controller'] = $this->controller;

	}
	
	public function index()
    {   	 

    	$this->load->view($this->controller.'/load_index',$this->data);
    }
 	

}

/* End of file clientes.php */
/* Location: ./application/controllers/Home.php */