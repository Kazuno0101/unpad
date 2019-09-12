<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
/**
 * 
 */
class karyawan extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("kepegawaian/karyawan_model");
    }

    public function index_get()
    {
        $Id_karyawan = $this->get("Id_karyawan");
        if ($Id_karyawan === null) {
            $karyawan = $this->karyawan_model->getkaryawan();
        } else {
            $karyawan = $this->karyawan_model->getkaryawan($Id_karyawan);
        }
        if ($karyawan) {
            $this->response([
                'status' => true,
                'data' => $karyawan
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
        $Id_karyawan = $this->delete("Id_karyawan");

        if ($Id_karyawan === null) {
            $this->response([
                'status' => false,
                'message' => "provide an Id_karyawan"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->karyawan_model->deletekaryawan($Id_karyawan) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $Id_karyawan,
                    'message' => "deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // nip not found
                $this->response([
                    'status' => false,
                    'message' => "Id_karyawan not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            "Id_karyawan" => $this->post("Id_karyawan"),
            "Nama" => $this->post("Nama"),
            "Alamat" => $this->post("Alamat"),
            "No_telp" => $this->post("No_telp"),
            "Jenis_kelamin" => $this->post("Jenis_kelamin"),
            "Password" => $this->post("Password")
        ];

        if ($this->karyawan_model->createkaryawan($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new Karyawan has been created."
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
        $Id_karyawan = $this->put("Id_karyawan");
        $data = [
            "Nama" => $this->put("Nama"),
            "Alamat" => $this->put("Alamat"),
            "No_telp" => $this->put("No_telp"),
            "Jenis_kelamin" => $this->put("Jenis_kelamin"),
            "Password" => $this->put("Password")
        ];

        if ($this->karyawan_model->updatekaryawan($data, $Id_karyawan) > 0) {
            $this->response([
                'status' => true,
                'message' => "data karyawan has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
