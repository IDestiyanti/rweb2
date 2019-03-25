<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[8]');
                $this->form_validation->set_rules('email', 'email', 'required|valid_email');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('index');
                }
                else
                {
                        $this->load->view('sukses');
                }
        }

      
}