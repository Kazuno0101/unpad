<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Dosen extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Dosen_model");
    }

    public function index_get()
    {
        $No = $this->get("No");
        if ($No === null) {
            $dosen = $this->Dosen_model->getDosen();
        } else {
            $dosen = $this->Dosen_model->getDosen($No);
        }

        if ($dosen) {
            $this->response([
                'status' => true,
                'data' => $dosen
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "No not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $No = $this->delete("No");

        if ($No === null) {
            $this->response([
                'status' => false,
                'message' => "provide an No"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Dosen_model->deleteDosen($No) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $No,
                    'message' => "deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // No not found
                $this->response([
                    'status' => false,
                    'message' => "No not found"
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

        if ($this->Dosen_model->createDosen($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new dosen has been created."
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
        $No = $this->put("No");
        $data = [
            "nrp" => $this->put("nrp"),
            "nama" => $this->put("nama"),
            "email" => $this->put("email"),
            "jurusan" => $this->put("jurusan")
        ];

        if ($this->Dosen_model->updateDosen($data, $No) > 0) {
            $this->response([
                'status' => true,
                'message' => "data dosen has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
