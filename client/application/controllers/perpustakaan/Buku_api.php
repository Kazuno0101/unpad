<?php

class Buku_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Perpustakaan_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Buku';

            $this->form_validation->set_rules('No_Buku', 'no_buku', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('perpustakaan/create/tambahBuku');
                  $this->load->view('templates/footer');
            } else {
                  $this->Perpustakaan_model->tambahDataBuku();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("perpustakaan/PerpustakaanMaster/buku");
            }
      }

      public function hapus($No_Buku)
      {
            $this->Perpustakaan_model->hapusDataBuku($No_Buku);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("perpustakaan/PerpustakaanMaster/buku");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Buku';
            $data['buku'] = $this->Perpustakaan_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('perpustakaan/detail/detailBuku', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['buku'] = $this->Perpustakaan_model->getDataById($api, $idName, $id);

            $data['judul'] = 'Form Ubah Data Buku';

            $this->form_validation->set_rules('Judul', 'judul', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('perpustakaan/edit/ubahBuku', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Perpustakaan_model->ubahDataBuku();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("perpustakaan/PerpustakaanMaster/buku");
            }
      }
}
