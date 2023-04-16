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
function getUser(){
	$this->db->where('user_id',$userId);
	$this->db->get('users')}
}