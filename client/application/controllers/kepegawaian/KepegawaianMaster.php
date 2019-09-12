<?php

class KepegawaianMaster extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model('Kepegawaian_model');
      }

      public function karyawan()
      {
            $data['judul'] = 'Data Karyawan';
            $data['api'] = "Karyawan";
            $data['karyawan'] = $this->Kepegawaian_model->getAllData("Karyawan");

            $this->load->view("templates/header", $data);
            $this->load->view("kepegawaian/karyawan", $data);
            $this->load->view("templates/footer");
      }

      public function jabatan()
      {
            $data['judul'] = 'Data Jabatan';
            $data['jabatan'] = $this->Kepegawaian_model->getAllData("Jabatan");

            $this->load->view("templates/header", $data);
            $this->load->view("kepegawaian/jabatan", $data);
            $this->load->view("templates/footer");
      }

      public function absensi()
      {
            $data['judul'] = 'Data Absensi';
            $data['absensi'] = $this->Kepegawaian_model->getAllData("Absensi");

            $this->load->view("templates/header", $data);
            $this->load->view("kepegawaian/absensi", $data);
            $this->load->view("templates/footer");
      }
}
