<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marcas extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('marcas_model');
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
        $_cliente_info = $this->marcas_model->get_by_id($id);

        if (!$_cliente_info) 
            _build_json(FALSE,'marca no registrado en la DB');
        
        $this->data['item'] = $_marca_info;

    	$this->load->view($this->controller.'/load_update',$this->data);
    }

    /*
      FUNCION CARGAR LIST
    */
    public function load_list()
    {
      $this->data['items'] = $this->marcas_model->get();
      $this->load->view($this->controller.'/load_list',$this->data);
    }

	/*
	   FUNCION: AGREGAR REGISTRO A LA BASE DE DATO
	*/
    public function action_add()
    {
        $_data = $this->validate_post();		
        $_result = $this->marcas_model->add($_data);

        if ($_result)
            _build_json(TRUE,'marca registrado');
        
        _build_json(FALSE,'Error al registrar marca');
    	
    }

    /*
       FUNCION ACTUALIZAR REGISTRO
    */
    public function action_update()
    {
        $_data = $this->validate_post();
        
        $_result = $this->marcas_model->update($_data['data'], $_data['marcas_id']);
        
        if ($_result)
            _build_json(TRUE,'marca actualizado');
        
        _build_json(FALSE,'Error al actualizar marca');
    }

    public function validate_post()
    {
         _is_post(); 
    	 _is_ajax_request();

        $_marcas_id = $this->input->post('_id',TRUE);

        $_marcas_info = $this->marcas_model->get_by_id($_marcas_id);

        if (!$_marcas_info) 
            _build_json(FALSE,'marca no registrado en la DB');

    	$_name = $this->input->post('name',TRUE);
    	$_data['name'] = _validate_empty($_name,'ingresa tu nombre');

        $_descripcion = $this->input->post('descripcion',TRUE);
        $_data['descripcion'] = _validate_empty($_descripcion,'ingresa tu descripcion');

        $_registro = $this->input->post('registro',TRUE);
        $_data['registro'] = _validate_empty($_registro,'selecciona tu registro');

        $_modificacion = $this->input->post('modificacion',TRUE);
        $_data['moficacion'] = _validate_empty($_modificacion,'ingresa tu modificacion');

        $_usuario = $this->input->post('usuario',TRUE);
        $_data['usuario'] = _validate_empty($_usuario,'ingresa tu usuario');


    	return array('data'=>$_data, 'usuario_id'=>$_usuario_id);

    }
    /*
    FUNCION ELIMINAR REGISTRO
    */
    public function action_delete($id)
    {
        $_marcas_info = $this->marcas_model->get_by_id($id);

        if (!$_marcas_info) 
            _build_json(FALSE,'marca no registrado en la DB');

        $_data = array('status'=> 99);
        $_result = $this->marcass_model->update($_data, $_marcas_info->id);
        
        if ($_result)
            _build_json(TRUE,'marca actualizado');
        
        _build_json(FALSE,'Error al actualizar marca');
    }
 
 	

}
