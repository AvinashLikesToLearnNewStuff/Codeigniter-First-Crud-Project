<?php
class User extends CI_Controller
{
    function index()
    {
        $this->load->model('User_model');
        $users = $this->User_model->all();

        $data = array();

        $data['users'] = $users;
        $this->load->view('list', $data);
    }
    function create()
    {

        $this->load->model('User_model');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
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
            $this->session->set_flashdata('success', 'record created successfully');
            redirect(base_url() . 'index.php/user/index');
        }
        function edit($userId)
        {
        }
    }
}