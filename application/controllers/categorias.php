<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('categorias_model');
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
        $_categoria_info = $this->categorias_model->get_by_id($id);

        if (!$_categoria_info) 
            _build_json(FALSE,'categoria no registrado en la DB');
        
        $this->data['item'] = $_categoria_info;

    	$this->load->view($this->controller.'/load_update',$this->data);
    }

    /*
      FUNCION CARGAR LIST
    */
    public function load_list()
    {
      $this->data['items'] = $this->categorias_model->get();
      $this->load->view($this->controller.'/load_list',$this->data);
    }

	/*
	   FUNCION: AGREGAR REGISTRO A LA BASE DE DATO
	*/
    public function action_add()
    {
        $_data = $this->validate_post();
        
        $_result = $this->categorias_model->add($_data);
        

        if ($_result)
            _build_json(TRUE,'categoria registrado');
        
        _build_json(FALSE,'Error al registrar categoria');
    	
    }

    /*
       FUNCION ACTUALIZAR REGISTRO
    */
    public function action_update()
    {
        $_categoria_id = $this->input->post('categoria_id',TRUE);

        $_data = $this->validate_post($_categoria_id);
        
        $_result = $this->categorias_model->update($_data,$_categoria_id);
        
        if ($_result)
            _build_json(TRUE,'categoria actualizado');
        
        _build_json(FALSE,'Error al actualizar categoria');
    }

    public function validate_post($_id=FALSE)
    {
         _is_post(); 
    	 _is_ajax_request();
     

         if ($_id) {

            $_categoria_info = $this->categorias_model->get_by_id($_id);

            if (!$_categoria_info) 
                _build_json(FALSE,'categoria no registrado en la DB');
         }

        

    	$_name = $this->input->post('name',TRUE);
    	$_data['name'] = _validate_empty($_name,'ingresa tu nombre');

        $_descripcion = $this->input->post('descripcion',TRUE);
        $_data['descripcion'] = _validate_empty($_descripcion,'ingresa tu descripcion');

    	return $_data;

    }
    /*
    FUNCION ELIMINAR REGISTRO
    */
    public function action_delete($id)
    {
        $_categoria_info = $this->categorias_model->get_by_id($id);

        if (!$_categoria_info) 
            _build_json(FALSE,'categoria no registrado en la DB');

        $_data = array('status'=> 99);

        $_result = $this->categorias_model->update($_data, $_categoria_info->id);
        
        if ($_result)
            _build_json(TRUE,'categoria actualizado');
        
        _build_json(FALSE,'Error al actualizar categoria');
    }
 
 	

}

/* End of file categorias.php */
/* Location: ./application/controllers/categorias.php */