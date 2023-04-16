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
		return	$users =	$this->db->get('users')->result_array();
	}
	function getUser($userId)
	{
		$this->db->where('user_id', $userId);
		return	$this->db->get('users')->row_array();
	}
	function updateUser($userId,$formArray)	{
		$this->db->where('user_id', $userId);
		$this->db->update(('users',$formArray));
	}
}