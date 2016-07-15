<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
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
        $_cliente_info = $this->users_model->get_by_id($id);

        if (!$_cliente_info) 
            _build_json(FALSE,'cliente no registrado en la DB');
        
        $this->data['item'] = $_cliente_info;

        $this->load->view($this->controller.'/load_update',$this->data);
    }

    /*
      FUNCION CARGAR LIST
    */
    public function load_list()
    {
      $this->data['items'] = $this->users_model->get();
      $this->load->view($this->controller.'/load_list',$this->data);
    }

    /*
       FUNCION: AGREGAR REGISTRO A LA BASE DE DATO
    */
    public function action_add()
    {
        $_data = $this->validate_post();
        
        $_result = $this->users_model->add($_data['data']);
        
        die();

        if ($_result)
            _build_json(TRUE,'cliente registrado');
        
        _build_json(FALSE,'Error al registrar cliente');
        
    }

    /*
       FUNCION ACTUALIZAR REGISTRO
    */
    public function action_update()
    {
        $_data = $this->validate_post(TRUE);
        
        $_result = $this->users_model->update($_data['data'], $_data['cliente_id']);
        
        if ($_result)
            _build_json(TRUE,'cliente actualizado');
        
        _build_json(FALSE,'Error al actualizar cliente');
    }

    public function validate_post($id=FALSE)
    {
         _is_post(); 
         _is_ajax_request();
         $_cliente_id = FALSE;

         if ($id) {
             $_cliente_id = $this->input->post('cliente_id',TRUE);

            $_cliente_info = $this->users_model->get_by_id($_cliente_id);

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

        $_address = $this->input->post('address',TRUE);
        $_data['address'] = _validate_empty($_address,'ingresa tu dirección');

        $_district_id = $this->input->post('district_id',TRUE);
        $_data['district_id'] = _validate_empty($_district_id,'selecciona tu distrito');

        return array('data'=>$_data, 'cliente_id'=>$_cliente_id);

    }
    /*
    FUNCION ELIMINAR REGISTRO
    */
    public function action_delete($id)
    {
        $_cliente_info = $this->users_model->get_by_id($id);

        if (!$_cliente_info) 
            _build_json(FALSE,'cliente no registrado en la DB');

        $_data = array('status'=> 99);

        $_result = $this->users_model->update($_data, $_cliente_info->id);
        
        if ($_result)
            _build_json(TRUE,'cliente actualizado');
        
        _build_json(FALSE,'Error al actualizar cliente');
    }
 
    

}

/* End of file clientes.php */
/* Location: ./application/controllers/clientes.php */