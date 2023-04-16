<?php
class User extends CI_Controller
{

    function create()
    {

        $this->load->model('User_model');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|validate_email');
        // $this->load->view('create');

        if ($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {
            //save user to database
            $form_array = array();
            $form_array['name'] = $this->input->post('name');
            $form_array['email'] = $this->input->post('email');
            $form_array['created_at'] = date('Y-m-d ');

            $this->User_model->create($form_array);
        }
    }
}