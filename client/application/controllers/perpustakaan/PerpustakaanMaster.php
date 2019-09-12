<?php

class PerpustakaanMaster extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model('Perpustakaan_model');
      }

      public function anggota()
      {
            $data['judul'] = 'Data Anggota';
            $data['api'] = "Perpustakaan";
            $data['anggota'] = $this->Perpustakaan_model->getAllData("Anggota");

            $this->load->view("templates/header", $data);
            $this->load->view("perpustakaan/anggota", $data);
            $this->load->view("templates/footer");
      }

      public function buku()
      {
            $data['judul'] = 'Data Buku';
            $data['buku'] = $this->Perpustakaan_model->getAllData("Buku");

            $this->load->view("templates/header", $data);
            $this->load->view("perpustakaan/buku", $data);
            $this->load->view("templates/footer");
      }

      public function transaksi()
      {
            $data['judul'] = 'Data Transaksi';
            $data['transaksi'] = $this->Perpustakaan_model->getAllData("Transaksi");

            $this->load->view("templates/header", $data);
            $this->load->view("perpustakaan/transaksi", $data);
            $this->load->view("templates/footer");
      }
}
