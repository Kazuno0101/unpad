<?php

class MahasiswaMaster extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
      }

      public function mahasiswa()
      {
            $data['judul'] = 'Data Mahasiswa';
            $data['api'] = "Mahasiswa";
            $data['mahasiswa'] = $this->Mahasiswa_model->getAllData("Mahasiswa");

            $this->load->view("templates/header", $data);
            $this->load->view("mahasiswa/mahasiswa", $data);
            $this->load->view("templates/footer");
      }

      public function dosen()
      {
            $data['judul'] = 'Data Dosen';
            $data['dosen'] = $this->Mahasiswa_model->getAllData("Dosen");

            $this->load->view("templates/header", $data);
            $this->load->view("mahasiswa/dosen", $data);
            $this->load->view("templates/footer");
      }

      public function mataKuliah()
      {
            $data['judul'] = 'Data Mata kuliah';
            $data['mataKuliah'] = $this->Mahasiswa_model->getAllData("MataKuliah");

            $this->load->view("templates/header", $data);
            $this->load->view("mahasiswa/mataKuliah", $data);
            $this->load->view("templates/footer");
      }

      public function perkuliahan()
      {
            $data['judul'] = 'Form Tambah Data Mahasiswa';
            $data['perkuliahan'] = $this->Mahasiswa_model->getAllData("Perkuliahan");

            $this->load->view("templates/header", $data);
            $this->load->view("mahasiswa/perkuliahan", $data);
            $this->load->view("templates/footer");
      }
}
