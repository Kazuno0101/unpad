<?php

class Admin extends CI_Controller{

    public function index(){
        $this->load->view("templates/header");
        $this->load->view("admin/index");
        $this->load->view("templates/footer");
    }

    public function get(){
        $this->load->view("templates/header");
        $this->load->view("admin/get");
        $this->load->view("templates/footer");
    }
    
    public function post(){
        $this->load->view("templates/header");
        $this->load->view("admin/post");
        $this->load->view("templates/footer");
    }

    public function delete(){
        $this->load->view("templates/header");
        $this->load->view("admin/delete");
        $this->load->view("templates/footer");
    }
    
    public function put(){
        $this->load->view("templates/header");
        $this->load->view("admin/put");
        $this->load->view("templates/footer");
    }

    public function newApi(){
        $this->load->view("templates/header");
        $this->load->view("admin/newApi");
        $this->load->view("templates/footer");
    }
}