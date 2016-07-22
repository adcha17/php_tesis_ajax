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
        

        

         $this->data ['view'] = $this->controller.'/load_add';
      $this->load->view('home/load_index',$this->data);
    }

    /*
      FUNCION CARGAR EL FORMULARIO UPDATE
    */
    public function load_update($id=FALSE)
    {
        $_marcas_info = $this->marcas_model->get_by_id($id);

        if (!$_marcas_info) 
            _build_json(FALSE,'marca no registrado en la DB');

         $this->data['item'] = $_marcas_info;
        $this->data['view'] = $this->controller.'/load_update';
        
         $this->load->view('home/load_index',$this->data);

    }

    /*
      FUNCION CARGAR LIST
    */
    public function load_list()
    {
        $this->data['items'] = $this->marcas_model->get();
        $this->data ['view'] = $this->controller.'/load_list';
      $this->load->view('home/load_index',$this->data);
      
     
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
        $_marcas_id = $this->input->post('marcas_id',TRUE);

        $_data = $this->validate_post($_marcas_id);
        
        $_result = $this->marcas_model->update($_data,$_marcas_id);
        
        if ($_result)
            _build_json(TRUE,'marca actualizado');
        
        _build_json(FALSE,'Error al actualizar marca');
    }

    public function validate_post($_id=FALSE)
    {
         _is_post(); 
         _is_ajax_request();
     

         if ($_id) {

            $_marcas_info = $this->marcas_model->get_by_id($_id);

            if (!$_marcas_info) 
                _build_json(FALSE,'marcas.php no registrado en la DB');
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
        $_marca_info = $this->marcas_model->get_by_id($id);

        if (!$_marca_info) 
            _build_json(FALSE,'marca no registrado en la DB');

        $_data = array('status'=> 99);

        $_result = $this->marcas_model->update($_data, $_marca_info->id);
        
        if ($_result)
            _build_json(TRUE,'marca actualizado');
        
        _build_json(FALSE,'Error al actualizar marca');
    }
 
    

}

/* End of file marcas.php */
/* Location: ./application/controllers/marcas.php */