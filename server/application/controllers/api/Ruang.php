<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Ruang extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Ruang_model");

        $this->methods['index_get']['limit'] = 20;
    }

    public function index_get()
    {

        $id = $this->get("id");
        if ($id === null) {
            $ruang = $this->Ruang_model->getRuang();
        } else {
            $ruang = $this->Ruang_model->getRuang($id);
        }

        if ($ruang) {
            $this->response([
                'status' => true,
                'data' => $ruang
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "id not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete("id");

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => "provide an id"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Ruang_model->deleteRuang($id) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $id,
                    'message' => "deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // id not found
                $this->response([
                    'status' => false,
                    'message' => "id not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            "nrp" => $this->post("nrp"),
            "nama" => $this->post("nama"),
            "email" => $this->post("email"),
            "jurusan" => $this->post("jurusan")
        ];

        if ($this->Ruang_model->createRuang($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new Ruang has been created."
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to create new data!"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put("id");
        $data = [
            "nrp" => $this->put("nrp"),
            "nama" => $this->put("nama"),
            "email" => $this->put("email"),
            "jurusan" => $this->put("jurusan")
        ];

        if ($this->Ruang_model->updateRuang($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => "data Ruang has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
