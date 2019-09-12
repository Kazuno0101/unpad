<?php

class Jabatan_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Kepegawaian_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Jabtan';

            $this->form_validation->set_rules('Kode_jabatan', 'kode jabatan', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('kepegawaian/create/tambahJabatan');
                  $this->load->view('templates/footer');
            } else {
                  $this->Kepegawaian_model->tambahDataJabatan();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("kepegawaian/KepegawaianMaster/jabatan");
            }
      }

      public function hapus($Kode_jabatan)
      {
            $this->Kepegawaian_model->hapusDatajabatan($Kode_jabatan);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("kepegawaian/KepegawaianMaster/jabatan");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Jabatan';
            $data['jabatan'] = $this->Kepegawaian_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('kepegawaian/detail/detailJabatan', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['jabatan'] = $this->Kepegawaian_model->getDataById($api, $idName, $id);
            $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];

            $data['judul'] = 'Form Ubah Data Jabatan';

            $this->form_validation->set_rules('Jabatan', 'Nama jabatan', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('kepegawaian/edit/ubahJabatan', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Kepegawaian_model->ubahDataJabatan();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("kepegawaian/KepegawaianMaster/jabatan");
            }
      }
}
