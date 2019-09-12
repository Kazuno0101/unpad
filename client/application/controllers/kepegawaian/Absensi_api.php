<?php

class Absensi_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Kepegawaian_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Absensi';

            $this->form_validation->set_rules('Id_absensi', 'ID absensi', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('kepegawaian/create/tambahAbsensi');
                  $this->load->view('templates/footer');
            } else {
                  $this->Kepegawaian_model->tambahDataAbsensi();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("kepegawaian/KepegawaianMaster/absensi");
            }
      }

      public function hapus($Id_absensi)
      {
            $this->Kepegawaian_model->hapusDataAbsensi($Id_absensi);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("kepegawaian/KepegawaianMaster/absensi");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Absensi';
            $data['absensi'] = $this->Kepegawaian_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('kepegawaian/detail/detailAbsensi', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['absensi'] = $this->Kepegawaian_model->getDataById($api, $idName, $id);

            $data['judul'] = 'Form Ubah Data Absensi';

            $this->form_validation->set_rules('Tanggal_kerja', 'Tanggal kerja', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('kepegawaian/edit/ubahAbsensi', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Kepegawaian_model->ubahDataAbsensi();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("kepegawaian/KepegawaianMaster/absensi");
            }
      }
}
