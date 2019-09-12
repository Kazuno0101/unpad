<?php

class Transaksi_api extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model("Perpustakaan_model");
      }

      public function tambah()
      {
            $data['judul'] = 'Form Tambah Data Transaksi';
            $data['transaksi'] = $this->Perpustakaan_model->getAllData("transaksi");
            $data['anggota'] = $this->Perpustakaan_model->getAllData("anggota");
            $data['buku'] = $this->Perpustakaan_model->getAllData("buku");

            $this->form_validation->set_rules('No_Pinjam', 'no_pinjam', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('perpustakaan/create/tambahTransaksi', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Perpustakaan_model->tambahDataTransaksi();
                  $this->session->set_flashdata('flash', 'Ditambahkan');
                  redirect("perpustakaan/PerpustakaanMaster/transaksi");
            }
      }

      public function hapus($No_Pinjam)
      {
            $this->Perpustakaan_model->hapusDataTransaksi($No_Pinjam);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect("perpustakaan/PerpustakaanMaster/transaksi");
      }

      public function detail($api, $idName, $id)
      {
            $data['judul'] = 'Detail Data Transaksi';
            $data['transaksi'] = $this->Perpustakaan_model->getDataById($api, $idName, $id);
            $this->load->view('templates/header', $data);
            $this->load->view('perpustakaan/detail/detailTransaksi', $data);
            $this->load->view('templates/footer');
      }

      public function ubah($api, $idName, $id)
      {
            $data['transaksi'] = $this->Perpustakaan_model->getDataById($api, $idName, $id);
            $data['anggota'] = $this->Perpustakaan_model->getAllData("anggota");
            $data['buku'] = $this->Perpustakaan_model->getAllData("buku");

            $data['judul'] = 'Form Ubah Data Transaksi';

            $this->form_validation->set_rules('Nama', 'nama', 'required');

            if ($this->form_validation->run() == false) {
                  $this->load->view('templates/header', $data);
                  $this->load->view('perpustakaan/edit/ubahTransaksi', $data);
                  $this->load->view('templates/footer');
            } else {
                  $this->Perpustakaan_model->ubahDataTransaksi();
                  $this->session->set_flashdata('flash', 'Diubah');
                  redirect("perpustakaan/PerpustakaanMaster/transaksi");
            }
      }
}
