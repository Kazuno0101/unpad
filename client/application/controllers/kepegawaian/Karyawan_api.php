<?php

class Karyawan_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Kepegawaian_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Karyawan';

            $this->form_validation->set_rules('Id_karyawan', 'Id Karyawan', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('kepegawaian/create/tambahKaryawan', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Kepegawaian_model->tambahDataKaryawan();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("Kepegawaian/KepegawaianMaster/Karyawan");
            }
      }


      public function hapus($Id_karyawan)
      {
            $this->Kepegawaian_model->hapusDataKaryawan($Id_karyawan);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("kepegawaian/KepegawaianMaster/Karyawan");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Karyawan';
            $data['karyawan'] = $this->Kepegawaian_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('kepegawaian/detail/detailKaryawan', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['karyawan'] = $this->Kepegawaian_model->getDataById($api, $idName, $id);
            $data['Jenis_kelamin'] = ['Laki-laki', 'Perempuan'];

            $data['judul'] = 'Form Ubah Data Karyawan';

            $this->form_validation->set_rules('Nama', 'nama', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('kepegawaian/edit/ubahKaryawan', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Kepegawaian_model->ubahDataKaryawan();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("kepegawaian/KepegawaianMaster/Karyawan");
            }
      }
}
