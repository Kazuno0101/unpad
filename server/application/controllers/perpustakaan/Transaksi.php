<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Transaksi extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("perpustakaan/Transaksi_model");
    }

    public function index_get()
    {
        $No_Pinjam = $this->get("No_Pinjam");
        if ($No_Pinjam === null) {
            $transaksi = $this->Transaksi_model->getTransaksi();
        } else {
            $transaksi = $this->Transaksi_model->getTransaksi($No_Pinjam);
        }

        if ($transaksi) {
            $this->response([
                'status' => true,
                'data' => $transaksi
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "No_Pinjam not found"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $No_Pinjam = $this->delete("No_Pinjam");

        if ($No_Pinjam === null) {
            $this->response([
                'status' => false,
                'message' => "provide an No_Pinjam"
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Transaksi_model->deleteTransaksi($No_Pinjam) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $No_Pinjam,
                    'message' => "deleted."
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // No_Pinjam not found
                $this->response([
                    'status' => false,
                    'message' => "No_Pinjam not found"
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            "No_Pinjam" => $this->post("No_Pinjam"),
            "Nama" => $this->post("Nama"),
            "ID_Anggota" => $this->post("ID_Anggota"),
            "No_Buku" => $this->post("No_Buku"),
            "Tgl_Pinjam" => $this->post("Tgl_Pinjam"),
            "Tgl_Kembali" => $this->post("Tgl_Kembali"),
        ];

        if ($this->Transaksi_model->createTransaksi($data) > 0) {
            $this->response([
                'status' => true,
                'message' => "new transaksi has been created."
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
        $No_Pinjam = $this->put("No_Pinjam");
        $data = [
            "Nama" => $this->put("Nama"),
            "ID_Anggota" => $this->put("ID_Anggota"),
            "No_Buku" => $this->put("No_Buku"),
            "Tgl_Pinjam" => $this->put("Tgl_Pinjam"),
            "Tgl_Kembali" => $this->put("Tgl_Kembali")
        ];

        if ($this->Transaksi_model->updateTransaksi($data, $No_Pinjam) > 0) {
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
