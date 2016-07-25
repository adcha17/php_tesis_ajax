<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargos extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('cargos_model');
		$this->controller = strtolower(get_class($this));
		$this->data['controller'] = $this->controller;

	}
	/*
 	  FUNCION CARGAR EL FORMULARIO ADD
 	*/
	public function load_add()
    {
    	//_beta();
    	//_is_ajax_request();
    	

    	$this->load->view($this->controller.'/load_add',$this->data);
    }

    /*
      FUNCION CARGAR EL FORMULARIO UPDATE
    */
    public function load_update($id=FALSE)
    {
        $_cargos_info = $this->cargos_model->get_by_id($id);

        if (!$_cargos_info) 
            _build_json(FALSE,'cargos no registrado en la DB');
        
        $this->data['item'] = $_cargos_info;

    	$this->load->view($this->controller.'/load_update',$this->data);
    }

    /*
      FUNCION CARGAR LIST
    */
    public function load_list()
    {
      $this->data['items'] = $this->cargos_model->get();
      $this->load->view($this->controller.'/load_list',$this->data);
    }

	/*
	   FUNCION: AGREGAR REGISTRO A LA BASE DE DATO
	*/
    public function action_add()
    {
        $_data = $this->validate_post();
        
        $_result = $this->cargos_model->add($_data['data']);
        
        die();

        if ($_result)
            _build_json(TRUE,'cargos registrado');
        
        _build_json(FALSE,'Error al registrar cargos');
    	
    }

    /*
       FUNCION ACTUALIZAR REGISTRO
    */
    public function action_update()
    {
        $_data = $this->validate_post(TRUE);
        
        $_result = $this->cargos_model->update($_data['data'], $_data['cargos_id']);
        
        if ($_result)
            _build_json(TRUE,'cargos actualizado');
        
        _build_json(FALSE,'Error al actualizar cargos');
    }

    public function validate_post($id=FALSE)
    {
         _is_post(); 
    	 _is_ajax_request();
         $_cargos_id = FALSE;

         if ($id) {
             $_cargos_id = $this->input->post('cargos_id',TRUE);

            $_cargos_info = $this->cargos_model->get_by_id($_cargos_id);

            if (!$_cargos_info) 
                _build_json(FALSE,'cargos no registrado en la DB');
         }

        

    	$_name = $this->input->post('name',TRUE);
    	$_data['name'] = _validate_empty($_name,'ingresa tu nombre');

        $_last_name = $this->input->post('last_name',TRUE);
        $_data['last_name'] = _validate_empty($_last_name,'ingresa tu apellido');

        $_sex = $this->input->post('sex',TRUE);
        $_data['sex'] = _validate_empty($_sex,'selecciona tu sexo');

        $_dni = $this->input->post('dni',TRUE);
        $_data['dni'] = _validate_empty($_dni,'ingresa tu dni');

        $_address = $this->input->post('address',TRUE);
        $_data['address'] = _validate_empty($_address,'ingresa tu dirección');

        $_district_id = $this->input->post('district_id',TRUE);
        $_data['district_id'] = _validate_empty($_district_id,'selecciona tu distrito');

    	return array('data'=>$_data, 'cargos_id'=>$_cargos_id);

    }
    /*
    FUNCION ELIMINAR REGISTRO
    */
    public function action_delete($id)
    {
        $_cargos_info = $this->cargos_model->get_by_id($id);

        if (!$_cargos_info) 
            _build_json(FALSE,'cargos no registrado en la DB');

        $_data = array('status'=> 99);

        $_result = $this->cargos_model->update($_data, $_cargos_info->id);
        
        if ($_result)
            _build_json(TRUE,'cargos actualizado');
        
        _build_json(FALSE,'Error al actualizar cargos');
    }
 
 	

}

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */