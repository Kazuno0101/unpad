<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Mahasiswa extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mahasiswa/Mahasiswa_model");
    }

    public function index_get()
    {
        $nim = $this->get("nim");
        if ($nim === null) {
            $mahasiswa = $this->Mahasiswa_model->getMahasiswa();
        } else {
            $mahasiswa = $this->Mahasiswa_model->getMahasiswa($nim);
        }

        if ($mahasiswa) {
            $this->response([
                'status' => true,
                'data' => $mahasiswa
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "nim not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $nim = $this->delete("nim");

        if ($nim === null) {
            $this->response([
                'status' => false,
                'message' => "provide an nim"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Mahasiswa_model->deleteMahasiswa($nim) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $nim,
                    'message' => "deleted."
                ], REST_Controller::HTTP_OK);
            } else {
                // nim not found
                $this->response([
                    'status' => false,
                    'message' => "nim not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            "nim" => $this->post("nim"),
            "nama_mhs" => $this->post("nama_mhs"),
            "tgl_lahir" => $this->post("tgl_lahir"),
            "alamat" => $this->post("alamat"),
            "jenis_kelamin" => $this->post("jenis_kelamin")
        ];

        if ($this->Mahasiswa_model->createMahasiswa($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new Mahasiswa has been created."
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
        $nim = $this->put("nim");

        $data = [
            "nama_mhs" => $this->put("nama_mhs"),
            "tgl_lahir" => $this->put("tgl_lahir"),
            "alamat" => $this->put("alamat"),
            "jenis_kelamin" => $this->put("jenis_kelamin")
        ];

        if ($this->Mahasiswa_model->updateMahasiswa($data, $nim) > 0) {
            $this->response([
                'status' => true,
                'message' => "data Mahasiswa has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
