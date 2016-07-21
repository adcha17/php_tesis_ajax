<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	public function add($_post)
	{
		if (empty($_post))
			return FALSE;

		return $this->db->insert('categorias',$_post);
		
	}

	public function update($_post,$_id)
	{
		if (!is_numeric($_id))
			return FALSE;
		 

		if (empty($_post))
			return FALSE;

		$this->db->where('id',$_id);

		return $this->db->update('categorias',$_post);
		
	}

	public function delete($_id)
	{
		if (!is_numeric($_id))
			return FALSE;
		 

		if (empty($post))
			return FALSE;

		$this->db->where('id',$_id);

		return $this->db->update('categorias',$_post);
		
	}

	public function get($_select='*')
	{
		$this->db->select($_select);
		$this->db->where(
					array(

						'status !='=>99
					)
						
					);

		return $this->db->get('categorias')->result();
	}

	public function get_by_id($_id, $_select = '*')
	{

	  if (!is_numeric($_id))
			return FALSE;

	    $this->db->select($_select);
		$this->db->where(
					array(
						'status !='=>99,
						'id' =>$_id
					)
						
					);

		return $this->db->get('categorias')->row();	
	}



}
