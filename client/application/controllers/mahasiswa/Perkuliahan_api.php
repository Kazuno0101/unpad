<?php

class Perkuliahan_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Mahasiswa_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Perkuliahan';

            $this->form_validation->set_rules('nim', 'NIM', 'required');
            $this->form_validation->set_rules('kode_mk', 'Kode Mata Kuliah', 'required');
            $this->form_validation->set_rules('nip', 'NIP', 'required');
            $this->form_validation->set_rules('nilai', 'Nilai', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('mahasiswa/create/tambahPerkuliahan');
                  $this->load->view('templates/footer');
            } else {
                  $this->Mahasiswa_model->tambahDataPerkuliahan();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("mahasiswa/mahasiswamaster/Perkuliahan");
            }
      }

      public function hapus($id)
      {
            $this->Mahasiswa_model->hapusDataPerkuliahan($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("mahasiswa/mahasiswamaster/Perkuliahan");
      }

      public function ubah($api, $idName, $id)
      {
            $data['perkuliahan'] = $this->Mahasiswa_model->getDataById($api, $idName, $id);

            $data['judul'] = 'Form Ubah Data Perkuliahan';

            $this->form_validation->set_rules('nim', 'NIM', 'required');
            $this->form_validation->set_rules('kode_mk', 'Kode Mata Kuliah', 'required');
            $this->form_validation->set_rules('nip', 'NIP', 'required');
            $this->form_validation->set_rules('nilai', 'Nilai', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('mahasiswa/edit/ubahPerkuliahan', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Mahasiswa_model->ubahDataPerkuliahan();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("mahasiswa/mahasiswamaster/Perkuliahan");
            }
      }
}
