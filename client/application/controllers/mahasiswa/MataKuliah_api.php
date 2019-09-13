<?php

class MataKuliah_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Mahasiswa_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Mata Kuliah';
            $data['kodeunik'] = $this->model_admin->buat_kode();
            $this->form_validation->set_rules('kode_mk', 'Kode Mata Kuliah', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('mahasiswa/create/tambahMataKuliah', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Mahasiswa_model->tambahDataMataKuliah();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("mahasiswa/mahasiswamaster/matakuliah");
            }
      }

      public function hapus($kode_mk)
      {
            $this->Mahasiswa_model->hapusDataMatakuliah($kode_mk);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("mahasiswa/mahasiswamaster/matakuliah");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Dosen';
            $data['matkul'] = $this->Mahasiswa_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/detail/detailMataKuliah', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['matkul'] = $this->Mahasiswa_model->getDataById($api, $idName, $id);

            $data['judul'] = 'Form Ubah Data Mata Kuliah';

            $this->form_validation->set_rules('nama_mk', 'Nama Mata Kuliah', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('mahasiswa/edit/ubahMatakuliah', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Mahasiswa_model->ubahDataMataKuliah();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("mahasiswa/mahasiswamaster/matakuliah");
            }
      }
}
