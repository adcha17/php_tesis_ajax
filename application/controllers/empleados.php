<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Empleados extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('empleados_model');
        $this->controller = strtolower(get_class($this));
        $this->data['controller'] = $this->controller;
    }

    /*
      FUNCION CARGAR EL FORMULARIO ADD
     */

    public function load_add() {
        $this->data['view'] = $this->controller . '/load_add';

        $this->load->view('home/load_index', $this->data);
    }

    /*
      FUNCION CARGAR EL FORMULARIO UPDATE
     */

    public function load_update($id = FALSE) {
        $_empleado_info = $this->empleados_model->get_by_id($id);

        if (!$_empleado_info)
            _build_json(FALSE, 'empleado no registrado en la DB');

        $this->data['item'] = $_empleado_info;
        $this->data['view'] = $this->controller . '/load_update';

        $this->load->view('home/load_index', $this->data);
    }

    /*
      FUNCION CARGAR LIST
     */

    public function load_list() {
        $this->data['items'] = $this->empleados_model->get();
        $this->data['view'] = $this->controller . '/load_list';

        $this->load->view('home/load_index', $this->data);
    }

    /*
      FUNCION: AGREGAR REGISTRO A LA BASE DE DATO
     */

    public function action_add() {
        $_data = $this->validate_post();

        $_result = $this->empleados_model->add($_data['data']);

        if ($_result)
            _build_json(TRUE, 'empleado registrado');

        _build_json(FALSE, 'Error al registrar empleado');
    }

    //funcion para subir archivos
    public function upload() {
        $uploads_dir = 'uploads/';
        for ($i = 0; $i < count($_FILES['upload_field']['name']); $i++) {


            $array[] = array(
                'name' => $_FILES['upload_field']['name'][$i],
                'type' => $_FILES['upload_field']['type'][$i],
                'size' => $_FILES['upload_field']['size'][$i],
                'tmp_name' => $_FILES['upload_field']['tmp_name'][$i]
            );
            $tmp_name = $_FILES['upload_field']['tmp_name'][$i];
            $name = $_FILES['upload_field']['name'][$i];
            move_uploaded_file($tmp_name, $uploads_dir . $name);
        }

        exit(json_encode($array));
    }

    /*
      FUNCION ACTUALIZAR REGISTRO
     */

    public function action_update() {
        $_data = $this->validate_post(TRUE);

        $_result = $this->empleados_model->update($_data['data'], $_data['empleado_id']);

        if ($_result)
            _build_json(TRUE, 'empleado actualizado');

        _build_json(FALSE, 'Error al actualizar empleado');
    }

    public function validate_post($id = FALSE) {
        _is_post();
        _is_ajax_request();
        $_empleado_id = FALSE;

        if ($id) {
            $_empleado_id = $this->input->post('empleado_id', TRUE);

            $_empleado_info = $this->empleados_model->get_by_id($_empleado_id);

            if (!$_empleado_info)
                _build_json(FALSE, 'empleado no registrado en la DB');
        }

        $_name = $this->input->post('name', TRUE);
        $_data['name'] = _validate_empty($_name, 'ingresa tu nombre');

        $_photo = $this->input->post('photo', TRUE);
        $_data['photo'] = _validate_empty($_photo, 'ingresa tu foto');

        $_last_name = $this->input->post('last_name', TRUE);
        $_data['last_name'] = _validate_empty($_last_name, 'ingresa tu apellido');

        $_dni = $this->input->post('dni', TRUE);
        $_data['dni'] = _validate_empty($_dni, 'ingresa tu dni');

        $_sex = $this->input->post('sex', TRUE);
        $_data['sex'] = _validate_empty($_sex, 'selecciona tu sexo');

        $_department_id = $this->input->post('department_id', TRUE);
        $_data['department_id'] = _validate_empty($_department_id, 'selecciona tu departamento');

        $_civil_status = $this->input->post('civil_status', TRUE);
        $_data['civil_status'] = _validate_empty($_civil_status, 'selecciona tu estado civil');

        $_province_id = $this->input->post('province_id', TRUE);
        $_data['province_id'] = _validate_empty($_province_id, 'selecciona tu provincia');


        $_fec_nac = $this->input->post('fec_nac', TRUE);
        $_data['fec_nac'] = _validate_empty($_fec_nac, 'selecciona tu fecha de nacimiento');

        $_district_id = $this->input->post('district_id', TRUE);
        $_data['district_id'] = _validate_empty($_district_id, 'selecciona tu distrito');

        $_address = $this->input->post('address', TRUE);
        $_data['address'] = _validate_empty($_address, 'ingresa tu dirección');

        return array('data' => $_data, 'empleado_id' => $_empleado_id);
    }

    /*
      FUNCION ELIMINAR REGISTRO
     */

    public function action_delete($id) {
        $_empleado_info = $this->empleados_model->get_by_id($id);

        if (!$_empleado_info)
            _build_json(FALSE, 'empleado no registrado en la DB');

        $_data = array('status' => 99);

        $_result = $this->empleados_model->update($_data, $_empleado_info->id);

        if ($_result)
            _build_json(TRUE, 'empleado actualizado');

        _build_json(FALSE, 'Error al actualizar empleado');
    }

}

/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */