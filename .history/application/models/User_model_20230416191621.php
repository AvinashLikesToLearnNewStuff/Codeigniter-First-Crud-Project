<?php
class User_model extends CI_Model
{
	function create($formArray)
	{
		$this->db->insert('users', $formArray);
		//Insert into users (name,email) values (?,?) ;
	}
}


function all()
{
	$query = $this->db->get('users');
	return $query->result_array();
}