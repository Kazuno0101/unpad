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
        $this->load->model("mahasiswa/Dosen_model");
    }

    public function index_get()
    {
        $nip = $this->get("nip");
        if ($nip === null) {
            $dosen = $this->Dosen_model->getDosen();
        } else {
            $dosen = $this->Dosen_model->getDosen($nip);
        }

        if ($dosen) {
            $this->response([
                'status' => true,
                'data' => $dosen
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "nip not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $nip = $this->delete("nip");

        if ($nip === null) {
            $this->response([
                'status' => false,
                'message' => "provide an nip"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Dosen_model->deleteDosen($nip) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $nip,
                    'message' => "deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // nip not found
                $this->response([
                    'status' => false,
                    'message' => "nip not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            "nip" => $this->post("nip"),
            "nama_dosen" => $this->post("nama_dosen")
        ];

        if ($this->Dosen_model->createDosen($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new Dosen has been created."
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
        $nip = $this->put("nip");
        $data = [
            "nama_dosen" => $this->put("nama_dosen")
        ];

        if ($this->Dosen_model->updateDosen($data, $nip) > 0) {
            $this->response([
                'status' => true,
                'message' => "data Dosen has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
