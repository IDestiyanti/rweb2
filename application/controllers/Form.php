<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
                $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[8]');
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