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
    	
    	$this->load->view($this->controller.'/load_add',$this->data);
    }

    /*
      FUNCION CARGAR EL FORMULARIO UPDATE
    */
    public function load_update()
    {
    	$this->load->view($this->controller.'/load_update',$this->data);
    }

    /*
      FUNCION CARGAR LIST
    */
    public function load_list()
    {
      echo $this->controller;
      $this->load->view($this->controller.'/load_list',$this->data);
    }

	/*
	   FUNCION: AGREGAR REGISTRO A LA BASE DE DATO
	*/
    public function action_add()
    {

    }

    /*
       FUNCION ACTUALIZAR REGISTRO
    */
    public function action_update()
    {

    }

    /*
    FUNCION ELIMINAR REGISTRO
    */
    public function action_delete()
    {

    }
 
 	

}