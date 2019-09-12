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
        $data["user"] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view("templates/header", $data);
        $this->load->view("home/index", $data);
        $this->load->view("templates/footer");
    }
}
