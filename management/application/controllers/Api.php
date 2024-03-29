<?php

class Api extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("api/Api_model");

        $this->load->library("form_validation");

        $this->load->library('ftp');
    }

    public function index()
    {
        $data['table'] = $this->Api_model->getAllTable();

        $this->load->view("templates/header");
        $this->load->view("api/index", $data);
        $this->load->view("templates/footer");
    }

    public function get()
    {
        $data['table'] = $this->Api_model->getTableApi("GET");

        $this->load->view("templates/header");
        $this->load->view("api/get", $data);
        $this->load->view("templates/footer");
    }

    public function post()
    {
        $data['table'] = $this->Api_model->getTableApi("POST");

        $this->load->view("templates/header");
        $this->load->view("api/post", $data);
        $this->load->view("templates/footer");
    }

    public function delete()
    {
        $data['table'] = $this->Api_model->getTableApi("DELETE");

        $this->load->view("templates/header");
        $this->load->view("api/delete", $data);
        $this->load->view("templates/footer");
    }

    public function put()
    {
        $data['table'] = $this->Api_model->getTableApi("PUT");

        $this->load->view("templates/header");
        $this->load->view("api/put", $data);
        $this->load->view("templates/footer");
    }

    public function newApi()
    {

        $config['hostname'] = '127.0.0.1';
        $config['username'] = 'nuno';
        $config['password'] = 'nuno';
        $config['port']     = "21";
        $config['debug']    = TRUE;

        $this->ftp->connect($config);

        $data["list1"] = $this->ftp->list_files('/mahasiswa/');
        $data["list2"] = $this->ftp->list_files('/kepegawaian/');
        $data["list3"] = $this->ftp->list_files('/perpustakaan/');

        $this->form_validation->set_rules("apiName", "Api Name", "required");
        $this->form_validation->set_rules("url", "URL", "required|min_length[25]");

        if ($this->form_validation->run() == false) {
            $this->load->view("templates/header");
            $this->load->view("api/newApi", $data);
            $this->load->view("templates/footer");
        } else {
            $this->Api_model->create();
            $this->session->set_flashdata("flash", "Create");
            redirect("api/index");
        }


        $this->ftp->close();
    }

    public function deleteApi($id, $api)
    {
        $this->Api_model->delete($id);
        $this->session->set_flashdata("flash", "Delete");
        redirect("api/$api");
    }

    public function editApi($id, $api)
    {
        $data["api"] = $this->Api_model->getAllTable($id);
        $data["type"] = ["GET", "POST", "DELETE", "PUT"];
        $data["status"] = ["On", "Off"];

        $this->form_validation->set_rules("apiName", "Api Name", "required");
        $this->form_validation->set_rules("url", "URL", "required|min_length[25]");

        if ($this->form_validation->run() == false) {
            $this->load->view("templates/header");
            $this->load->view("api/editApi", $data);
            $this->load->view("templates/footer");
        } else {
            $this->Api_model->edit($id);
            $this->session->set_flashdata("flash", "Edit");
            redirect("api/$api");
        }
    }
}
