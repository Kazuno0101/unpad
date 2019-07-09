<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Krs extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Krs_model");
    }

    public function index_get()
    {
        $id = $this->get("id");
        if ($id === null) {
            $krs = $this->Krs_model->getKrs();
        } else {
            $krs = $this->Krs_model->getKrs($id);
        }

        if ($krs) {
            $this->response([
                'status' => true,
                'data' => $krs
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
            if ($this->Krs_model->deleteKrs($id) > 0) {
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

        if ($this->Krs_model->createKrs($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new Krs has been created."
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

        if ($this->Krs_model->updateKrs($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => "data Krs has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
