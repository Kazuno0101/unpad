<?php

class Mahasiswa_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Mahasiswa_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Mahasiswa';

            $this->form_validation->set_rules('nim', 'NIM', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('mahasiswa/tambahMahasiswa', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Mahasiswa_model->tambahDataMahasiswa();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("mahasiswa/mahasiswamaster/mahasiswa");
            }
      }

      public function hapus($nim)
      {
            $this->Mahasiswa_model->hapusData($nim);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("mahasiswa/mahasiswamaster/mahasiswa");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/detailMahasiswa', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['mahasiswa'] = $this->Mahasiswa_model->getDataById($api, $idName, $id);
            $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];

            $data['judul'] = 'Form Ubah Data Mahasiswa';

            $this->form_validation->set_rules('nama_mhs', 'Nama', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('mahasiswa/ubahMahasiswa', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Mahasiswa_model->ubahDataMahasiswa();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("mahasiswa/mahasiswamaster/mahasiswa");
            }
      }
}
