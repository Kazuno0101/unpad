<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Buku extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("perpustakaan/Buku_model");
    }

    public function index_get()
    {
        $No_Buku = $this->get("No_Buku");
        if ($No_Buku === null) {
            $buku = $this->Buku_model->getBuku();
        } else {
            $buku = $this->Buku_model->getBuku($No_Buku);
        }

        if ($buku) {
            $this->response([
                'status' => true,
                'data' => $buku
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "No_Buku not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $No_Buku = $this->delete("No_Buku");

        if ($No_Buku === null) {
            $this->response([
                'status' => false,
                'message' => "provide an No_Buku"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Buku_model->deleteBuku($No_Buku) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $No_Buku,
                    'message' => "deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // No_Buku not found
                $this->response([
                    'status' => false,
                    'message' => "No_Buku not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            "No_Buku" => $this->post("No_Buku"),
            "Judul" => $this->post("Judul"),
            "Pengarang" => $this->post("Pengarang"),
            "Jenis_Buku" => $this->post("Jenis_Buku")
        ];

        if ($this->Buku_model->createBuku($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new Buku has been created."
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
        $No_Buku = $this->put("No_Buku");
        $data = [
            "Judul" => $this->put("Judul"),
            "Pengarang" => $this->put("Pengarang"),
            "Jenis_Buku" => $this->put("Jenis_Buku")
        ];

        if ($this->Buku_model->updateBuku($data, $No_Buku) > 0) {
            $this->response([
                'status' => true,
                'message' => "data Buku has been updated."
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "failed to update data"
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
