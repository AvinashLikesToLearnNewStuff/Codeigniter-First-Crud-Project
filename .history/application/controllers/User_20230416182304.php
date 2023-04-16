<?php
class User extends CI_Controller
{

    function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|validate_email');
        $this->load->view('create');

        if ($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {
            //save user to database
        }
    }
}