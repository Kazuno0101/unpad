<?php

class Anggota_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Perpustakaan_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Anggota';

            $this->form_validation->set_rules('ID_Anggota', 'id_anggota', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('perpustakaan/create/tambahAnggota');
                  $this->load->view('templates/footer');
            } else {
                  $this->Perpustakaan_model->tambahDataAnggota();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("perpustakaan/PerpustakaanMaster/anggota");
            }
      }

      public function hapus($ID_Anggota)
      {
            $this->Perpustakaan_model->hapusDataAnggota($ID_Anggota);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("perpustakaan/PerpustakaanMaster/anggota");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Anggota';
            $data['anggota'] = $this->Perpustakaan_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('perpustakaan/detail/detailAnggota', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['anggota'] = $this->Perpustakaan_model->getDataById($api, $idName, $id);

            $data['judul'] = 'Form Ubah Data Anggota';

            $this->form_validation->set_rules('Nama', 'nama_anggota', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('perpustakaan/edit/ubahAnggota', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Perpustakaan_model->ubahDataAnggota();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("perpustakaan/PerpustakaanMaster/anggota");
            }
      }
}
