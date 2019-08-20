<?php

class Home extends CI_Controller
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
        $data['judul'] = 'Akademik Unpad';

        $this->load->view("templates/header", $data);
        $this->load->view("home/index");
        $this->load->view("templates/footer");
    }
}
