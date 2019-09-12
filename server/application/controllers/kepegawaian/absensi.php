<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class absensi extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("kepegawaian/absensi_model");
    }

    public function index_get()
    {
        $Id_absensi = $this->get("Id_absensi");
        if ($Id_absensi === null) {
            $absensi = $this->absensi_model->getabsensi();
        } else {
            $absensi = $this->absensi_model->getabsensi($Id_absensi);
        }

        if ($absensi) {
            $this->response([
                'status' => true,
                'data' => $absensi
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "id_absensi not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function index_delete()
    {
        $Id_absensi  = $this->delete("Id_absensi");

        if ($Id_absensi === null) {
            $this->response([
                'status' => false,
                'message' => "provide an Id Absensi"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->absensi_model->deleteabsensi($Id_absensi) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $Id_absensi,
                    'message' => "deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // nip not found
                $this->response([
                    'status' => false,
                    'message' => "Id_absensi not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            "Id_absensi" => $this->post("Id_absensi"),
            "Id_karyawan" => $this->post("Id_karyawan"),
            "Jam_masuk" => $this->post("Jam_masuk"),
            "Jam_pulang" => $this->post("Jam_pulang"),
            "Tanggal_kerja" => $this->post("Tanggal_kerja")
        ];

        if ($this->absensi_model->createabsensi($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new Absensi has been created."
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
        $Id_absensi = $this->put("Id_absensi");
        $data = [
            "Id_karyawan" => $this->put("Id_karyawan"),
            "Jam_masuk" => $this->put("Jam_masuk"),
            "Jam_pulang" => $this->put("Jam_pulang"),
            "Tanggal_kerja" => $this->put("Tanggal_kerja")
        ];

        if ($this->absensi_model->updateabsensi($data, $Id_absensi) > 0) {
            $this->response([
                'status' => true,
                'message' => "data Absensi has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
