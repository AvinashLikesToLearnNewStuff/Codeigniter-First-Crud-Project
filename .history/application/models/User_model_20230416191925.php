<?php
class User_model extends CI_Model
{
	function create($formArray)
	{
		$this->db->insert('users', $formArray);
		//Insert into users (name,email) values (?,?) ;
	}
	function all()
	{
		$this->db->get('users');
	}
}