<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Perkuliahan extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mahasiswa/Perkuliahan_model");
    }

    public function index_get()
    {
        $id = $this->get("id");
        if ($id === null) {
            $perkuliahan = $this->Perkuliahan_model->getPerkuliahan();
        } else {
            $perkuliahan = $this->Perkuliahan_model->getPerkuliahan($id);
        }

        if ($perkuliahan) {
            $this->response([
                'status' => true,
                'data' => $perkuliahan
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
            if ($this->Perkuliahan_model->deletePerkuliahan($id) > 0) {
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

    public function index_put()
    {
        $id = $this->put("id");
        $data = [
            "nim" => $this->put("nim"),
            "kode_mk" => $this->put("kode_mk"),
            "nip" => $this->put("nip"),
            "nilai" => $this->put("nilai")
        ];

        if ($this->Perkuliahan_model->updatePerkuliahan($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => "data Perkuliahan has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
