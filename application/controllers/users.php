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
        
       $this->data['empleados'] = $this->users_model->get_empleados();
        
        $this->load->view($this->controller.'/load_add',$this->data);
        //vdebug($this->data['items']);
        //die("sa");
    }

    /*
      FUNCION CARGAR EL FORMULARIO UPDATE
    */
    public function load_update($id=FALSE)
    {
       $this->data['empleados'] = $this->users_model->get_empleados();
        $_cliente_info = $this->users_model->get_by_id($id);
        
        if (!$_cliente_info) 
            _build_json(FALSE,'usuario no registrado en la DB');
        
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
        
        

        if ($_result)
            _build_json(TRUE,'usuario registrado');
        
        _build_json(FALSE,'Error al registrar usuario');
        
    }

    /*
       FUNCION ACTUALIZAR REGISTRO
    */
    public function action_update()
    {
        $_data = $this->validate_post(TRUE);
        
        $_result = $this->users_model->update($_data['data'], $_data['cliente_id']);
        
        if ($_result)
            _build_json(TRUE,'usuario actualizado');
        
        _build_json(FALSE,'Error al actualizar usuario');
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
                _build_json(FALSE,'usuario no registrado en la DB');
         }

        
        $_last_name = $this->input->post('empleado_id',TRUE);
        $_data['empleado_id'] = _validate_empty($_last_name,'Seleccione empleados');

        $_last_name = $this->input->post('tipo_usuario',TRUE);
        $_data['tipo_usuario'] = _validate_empty($_last_name,'Seleccione tipo de Usuario');

        $_sex = $this->input->post('nombre_usuario',TRUE);
        $_data['nombre_usuario'] = _validate_empty($_sex,'Ingrese nombre de usuario');

        $_dni = $this->input->post('password',TRUE);
        $_data['password'] = _validate_empty($_dni,'Ingrese una Contraseña');

        return array('data'=>$_data, 'cliente_id'=>$_cliente_id);

    }
    /*
    FUNCION ELIMINAR REGISTRO
    */
    public function action_delete($id)
    {
        $_cliente_info = $this->users_model->get_by_id($id);

        if (!$_cliente_info) 
            _build_json(FALSE,'usuario no registrado en la DB');

        $_data = array('status'=> 99);

        $_result = $this->users_model->update($_data, $_cliente_info->id);
        
        if ($_result)
            _build_json(TRUE,'usuario actualizado');
        
        _build_json(FALSE,'Error al actualizar usuario');
    }
 
    

}

/* End of file clientes.php */
/* Location: ./application/controllers/clientes.php */