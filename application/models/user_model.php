<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	public function add($post)
	{
		if (empaty($post))
			return FALSE;

		return $this->db->insert('users',$post);
		
	}

	public function update($_post,$_id)
	{
		if (!is_numeric($_id))
			return FALSE;
		 

		if (empaty($post))
			return FALSE;

		$this->db->where('id',$_id);

		return $this->db->update('users',$_post);
		
	}

	public function delete($_id)
	{
		if (!is_numeric($_id))
			return FALSE;
		 

		if (empaty($post))
			return FALSE;

		$this->db->where('id',$_id);

		return $this->db->update('users',$post);
		
	}

	public function get($sele='*')
	{
		$this->db->select($_select)
		$this->db->where(
					array(

						'status !='=>99
					)
						
					);

		return $this->db->get('users')->result();
	}

	public function get_by_id($_id)
	{

	  if (!is_numeric($_id))
			return FALSE;

	   $this->db->select($_select)
		$this->db->where(
					array(

						'status !='=>99
					)
						
					);

		return $this->db->get('users')->row();	
	}

	public function get_by_dni($_dni)
	{

	   if (!empty($_dni))
			return FALSE;

	   $this->db->select($_select)
		$this->db->where(
					array(

						'status !='=>99,
						'dni'=>$_dni
					)
						
					);

		return $this->db->get('users')->row();		
	}



}
