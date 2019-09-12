<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Anggota extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("perpustakaan/Anggota_model");
    }

    public function index_get()
    {
        $ID_Anggota = $this->get("ID_Anggota");
        if ($ID_Anggota === null) {
            $anggota = $this->Anggota_model->getAnggota();
        } else {
            $anggota = $this->Anggota_model->getAnggota($ID_Anggota);
        }

        if ($anggota) {
            $this->response([
                'status' => true,
                'data' => $anggota
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "id_anggota not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $ID_Anggota = $this->delete("ID_Anggota");

        if ($ID_Anggota === null) {
            $this->response([
                'status' => false,
                'message' => "provide an ID_Anggota"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Anggota_model->deleteAnggota($ID_Anggota) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $ID_Anggota,
                    'message' => "data success deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // ID_Anggota not found
                $this->response([
                    'status' => false,
                    'message' => "ID_Anggota not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            "ID_Anggota" => $this->post("ID_Anggota"),
            "Nama" => $this->post("Nama"),
            "Alamat" => $this->post("Alamat"),
            "No_Telp" => $this->post("No_Telp"),
            "Tgl_Lahir" => $this->post("Tgl_Lahir"),
        ];

        if ($this->Anggota_model->createAnggota($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new Anggota has been created."
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
        $ID_Anggota = $this->put("ID_Anggota");
        $data = [
            "Nama" => $this->put("Nama"),
            "Alamat" => $this->put("Alamat"),
            "No_Telp" => $this->put("No_Telp"),
            "Tgl_Lahir" => $this->put("Tgl_Lahir")
        ];

        if ($this->Anggota_model->updateAnggota($data, $ID_Anggota) > 0) {
            $this->response([
                'status' => true,
                'message' => "data Anggota has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
