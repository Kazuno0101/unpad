<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class jabatan extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("kepegawaian/jabatan_model");
    }

    public function index_get()
    {
        $Kode_jabatan = $this->get("Kode_jabatan");
        if ($Kode_jabatan === null) {
            $jabatan = $this->jabatan_model->getjabatan();
        } else {
            $jabatan = $this->jabatan_model->getjabatan($Kode_jabatan);
        }
        if ($jabatan) {
            $this->response([
                'status' => true,
                'data' => $jabatan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "Kode_jabatan not found"
            ], REST_Controller::http_not_found);
        }
    }
    public function index_delete()
    {
        $Kode_jabatan = $this->delete("Kode_jabatan");

        if ($Kode_jabatan === null) {
            $this->response([
                'status' => false,
                'message' => "provide an nip"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->jabatan_model->deletejabatan($Kode_jabatan) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $Kode_jabatan,
                    'message' => "deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // nip not found
                $this->response([
                    'status' => false,
                    'message' => "Kode_jabatan not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }
    public function index_post()
    {
        $data = [
            "Kode_jabatan" => $this->post("Kode_jabatan"),
            "Id_karyawan" => $this->post("Id_karyawan"),
            "Jabatan" => $this->post("Jabatan")

        ];

        if ($this->jabatan_model->createjabatan($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new jabatan has been created."
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
        $Kode_jabatan = $this->put("Kode_jabatan");
        $data = [
            "Id_karyawan" => $this->put("Id_karyawan"),
            "Jabatan" => $this->put("Jabatan")
        ];

        if ($this->jabatan_model->updatejabatan($data, $Kode_jabatan) > 0) {
            $this->response([
                'status' => true,
                'message' => "data jabatan has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
