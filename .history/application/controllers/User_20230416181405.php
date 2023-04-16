<?php
class User extends CI_Controller{

function create(){
 $this->form_validation->set_rules('name','Name','required');
 $this->form_validation->set_rules('name','Name','required');
$this->load->view('create')	;

}

}

?>
