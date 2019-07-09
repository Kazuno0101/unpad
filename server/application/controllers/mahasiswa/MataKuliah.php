<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class MataKuliah extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mahasiswa/MataKuliah_model");
    }

    public function index_get()
    {
        $kode_mk = $this->get("kode_mk");
        if ($kode_mk === null) {
            $mataKuliah = $this->MataKuliah_model->getMataKuliah();
        } else {
            $mataKuliah = $this->MataKuliah_model->getMataKuliah($kode_mk);
        }

        if ($mataKuliah) {
            $this->response([
                'status' => true,
                'data' => $mataKuliah
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "kode_mk not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $kode_mk = $this->delete("kode_mk");

        if ($kode_mk === null) {
            $this->response([
                'status' => false,
                'message' => "provkode_mke an kode_mk"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->MataKuliah_model->deleteMataKuliah($kode_mk) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $kode_mk,
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
            "kode_mk" => $this->post("kode_mk"),
            "nama_mk" => $this->post("nama_mk"),
            "sks" => $this->post("sks")
        ];

        if ($this->MataKuliah_model->createMataKuliah($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new MataKuliah has been created."
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
        $kode_mk = $this->put("kode_mk");
        $data = [
            "nama_mk" => $this->put("nama_mk"),
            "sks" => $this->put("sks")
        ];

        if ($this->MataKuliah_model->updateMataKuliah($data, $kode_mk) > 0) {
            $this->response([
                'status' => true,
                'message' => "data MataKuliah has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
