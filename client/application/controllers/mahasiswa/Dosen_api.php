<?php

class Dosen_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Mahasiswa_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Dosen';

            $this->form_validation->set_rules('nip', 'NIP', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('mahasiswa/create/tambahDosen');
                  $this->load->view('templates/footer');
            } else {
                  $this->Mahasiswa_model->tambahDataDosen();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("mahasiswa/mahasiswamaster/dosen");
            }
      }

      public function hapus($nip)
      {
            $this->Mahasiswa_model->hapusDataDosen($nip);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("mahasiswa/mahasiswamaster/dosen");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Dosen';
            $data['dosen'] = $this->Mahasiswa_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/detail/detailDosen', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['dosen'] = $this->Mahasiswa_model->getDataById($api, $idName, $id);
            $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];

            $data['judul'] = 'Form Ubah Data Dosen';

            $this->form_validation->set_rules('nama_dosen', 'Nama', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('mahasiswa/edit/ubahDosen', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Mahasiswa_model->ubahDataDosen();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("mahasiswa/mahasiswamaster/dosen");
            }
      }
}
