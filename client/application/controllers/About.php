<?php

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
    }
    public function index()
    {
        $data['judul'] = 'About';

        $this->load->view("templates/header", $data);
        $this->load->view("about/index");
        $this->load->view("templates/footer");
    }
}
