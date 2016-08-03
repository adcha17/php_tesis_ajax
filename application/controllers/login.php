<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		
		$this->controller = strtolower(get_class($this));
		$this->data['controller'] = $this->controller;
		$this->load->model('login_model');


	}
	/*
 	  FUNCION CARGAR EL FORMULARIO ADD
 	*/
	public function index()
    {
    	

        $this->load->view( $this->controller.'/load_login',$this->data);
    }

    public function login_ajax()
    {


    	$_data =  $this->validate_login();



    	$_result = $this->login_model->get_login($_data['username'],$_data['pass_sh1']);




    	if ($_result){

                $_login_data['login_data'] = array(
                   'username'  =>$_result->nombre_usuario,
                   'logged_in' => TRUE
               );

                $this->session->set_userdata($_login_data);


    		_build_json(TRUE,'Bienvenido a Home');
        }
    	else
    		_build_json(FALSE,'Usuario y/o password no validos');

    	
    }

    private function validate_login()
    {
    	_is_post(); 
    	 _is_ajax_request();

    	$_username = $this->input->post('username',TRUE);
    	$_data['username'] = _validate_empty($_username,'ingresa tu nombre de Usuario');

        $_password = $this->input->post('password',TRUE);
        
        $_data['password'] = _validate_empty($_password,'ingresa su password');

       
        $_data['pass_sh1'] = sha1($_data['password']);

        return $_data;
    }

   
   public function sign_out()
   {
       
       $this->session->sess_destroy();

       redirect('');
   }
 	

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */