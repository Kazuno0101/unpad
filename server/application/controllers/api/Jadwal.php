<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Jadwal extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Jadwal_model");
    }

    public function index_get()
    {
        $id = $this->get("id");
        if ($id === null) {
            $jadwal = $this->Jadwal_model->getJadwal();
        } else {
            $jadwal = $this->Jadwal_model->getJadwal($id);
        }

        if ($jadwal) {
            $this->response([
                'status' => true,
                'data' => $jadwal
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
            if ($this->Jadwal_model->deleteJadwal($id) > 0) {
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

        if ($this->Jadwal_model->createJadwal($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new jadwal has been created."
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

        if ($this->Jadwal_model->updateJadwal($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => "data jadwal has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
