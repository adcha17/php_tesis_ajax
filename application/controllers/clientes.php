<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('clientes_model');
		$this->controller = strtolower(get_class($this));
		$this->data['controller'] = $this->controller;


    if (!isset( $this->session->userdata['login_data']))
        redirect('');
    



	}
	/*
 	  FUNCION CARGAR EL FORMULARIO ADD
 	*/
	public function load_add()
    {
    	$this->data['view'] = $this->controller.'/load_add';

        $this->load->view('home/load_index',$this->data);
    }

    /*
      FUNCION CARGAR EL FORMULARIO UPDATE
    */
    public function load_update($id=FALSE)
    {
        $_cliente_info = $this->clientes_model->get_by_id($id);

        if (!$_cliente_info) 
            _build_json(FALSE,'cliente no registrado en la DB');
        
        $this->data['item'] = $_cliente_info;

    	$this->data['view'] = $this->controller.'/load_update';
        
        $this->load->view('home/load_index',$this->data);
    }

    /*
      FUNCION CARGAR LIST
    */
   

     public function load_list()
    {

        $this->data['items'] = $this->clientes_model->get();

       $this->data['view'] = $this->controller.'/load_list';

        $this->load->view('home/load_index',$this->data);
    }



	/*
	   FUNCION: AGREGAR REGISTRO A LA BASE DE DATO
	*/
    public function action_add()
    {
        $_data = $this->validate_post();
        
        $_result = $this->clientes_model->add($_data);
        
        



        if ($_result)
            _build_json(TRUE,'cliente registrado');
        
        _build_json(FALSE,'Error al registrar cliente');
    	
    }

    /*
       FUNCION ACTUALIZAR REGISTRO
    */
    public function action_update()
    {
        $_cliente_id = $this->input->post('cliente_id',TRUE);

        $_data = $this->validate_post($_cliente_id);
        
        $_result = $this->clientes_model->update($_data,$_cliente_id);
        
        if ($_result)
            _build_json(TRUE,'cliente actualizado');
        
        _build_json(FALSE,'Error al actualizar cliente');
    }

    public function validate_post($_id=FALSE)
    {
         _is_post(); 
    	 _is_ajax_request();
     

         if ($_id) {

            $_cliente_info = $this->clientes_model->get_by_id($_id);

            if (!$_cliente_info) 
                _build_json(FALSE,'cliente no registrado en la DB');
         }

        

    	$_name = $this->input->post('name',TRUE);
    	$_data['name'] = _validate_empty($_name,'ingresa tu nombre');

        $_last_name = $this->input->post('last_name',TRUE);
        $_data['last_name'] = _validate_empty($_last_name,'ingresa tu apellido');

        $_sex = $this->input->post('sex',TRUE);
        $_data['sex'] = _validate_empty($_sex,'selecciona tu sexo');

        $_dni = $this->input->post('dni',TRUE);
        $_data['dni'] = _validate_empty($_dni,'ingresa tu dni');

        $_cliente_info = $this->clientes_model->get_by_dni($_dni);

        if ($_id) {

            if($_cliente_info && (int) $_id !== (int) $_cliente_info->id)
              _build_json(FALSE,'Este dni ya esta registrado en la BD');

        }else{
            if($_cliente_info && $_cliente_info->id != $id)
              _build_json(FALSE,'Este dni ya esta registrado en la BD');

        }


        

        $_address = $this->input->post('address',TRUE);
        $_data['address'] = _validate_empty($_address,'ingresa tu dirección');

        $_district_id = $this->input->post('district_id',TRUE);
        $_data['district_id'] = _validate_empty($_district_id,'selecciona tu distrito');

    	return $_data;

    }
    /*
    FUNCION ELIMINAR REGISTRO
    */
    public function action_delete($id)
    {
        $_cliente_info = $this->clientes_model->get_by_id($id);

        if (!$_cliente_info) 
            _build_json(FALSE,'cliente no registrado en la DB');

        $_data = array('status'=> 99);

        $_result = $this->clientes_model->update($_data, $_cliente_info->id);
        
        if ($_result)
            _build_json(TRUE,'cliente actualizado');
        
        _build_json(FALSE,'Error al actualizar cliente');
    }
 
 	

}

/* End of file clientes.php */
/* Location: ./application/controllers/clientes.php */