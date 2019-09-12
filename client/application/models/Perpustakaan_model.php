<?php

use GuzzleHttp\Client;

class Perpustakaan_model extends CI_model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            "base_uri" => "http://localhost/pkl/tugas/server/perpustakaan/"
        ]);
    }

    public function getAllData($api)
    {
        $response = $this->_client->request("GET", "$api");

        $result = json_decode($response->getBody()->getContents(), true);

        return $result["data"];
    }

    public function getDataById($api, $idName, $id)
    {

        $response = $this->_client->request("GET", "$api", [
            "query" => [
                "$idName" => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result["data"][0];
    }

    public function tambahDataAnggota()
    {
        $data = [
            "ID_Anggota" => $this->input->post('ID_Anggota', true),
            "Nama" => $this->input->post('Nama', true),
            "Alamat" => $this->input->post('Alamat', true),
            "No_Telp" => $this->input->post('No_Telp', true),
            "Tgl_Lahir" => $this->input->post('Tgl_Lahir', true),
        ];

        $response = $this->_client->request("POST", "anggota", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusDataAnggota($ID_Anggota)
    {
        $response = $this->_client->request("DELETE", "anggota", [
            "form_params" => [
                "ID_Anggota" => $ID_Anggota
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function ubahDataAnggota()
    {
        $data = [
            "ID_Anggota" => $this->input->post('ID_Anggota', true),
            "Nama" => $this->input->post('Nama', true),
            "Alamat" => $this->input->post('Alamat', true),
            "No_Telp" => $this->input->post('No_Telp', true),
            "Tgl_Lahir" => $this->input->post('Tgl_Lahir', true)
        ];

        $response = $this->_client->request("PUT", "anggota", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataAnggota()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('ID_Anggota', $keyword);
        $this->db->like('Nama', $keyword);
        $this->db->or_like('Alamat', $keyword);
        $this->db->or_like('No_Telp', $keyword);
        $this->db->or_like('Tgl_Lahir', $keyword);
        return $this->db->get('anggota')->result_array();
    }

    public function tambahDataBuku()
    {
        $data = [
            "No_Buku" => $this->input->post('No_Buku', true),
            "Judul" => $this->input->post('Judul', true),
            "Pengarang" => $this->input->post('Pengarang', true),
            "Jenis_Buku" => $this->input->post('Jenis_Buku', true)
        ];

        $response = $this->_client->request("POST", "buku", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusDataBuku($No_Buku)
    {
        $response = $this->_client->request("DELETE", "buku", [
            "form_params" => [
                "No_Buku" => $No_Buku
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function ubahDataBuku()
    {
        $data = [
            "No_Buku" => $this->input->post('No_Buku', true),
            "Judul" => $this->input->post('Judul', true),
            "Pengarang" => $this->input->post('Pengarang', true),
            "Jenis_Buku" => $this->input->post('Jenis_Buku', true)
        ];

        $response = $this->_client->request("PUT", "buku", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahDataTransaksi()
    {
        $data = [
            "No_Pinjam" => $this->input->post('No_Pinjam', true),
            "Nama" => $this->input->post('Nama', true),
            "ID_Anggota" => $this->input->post('ID_Anggota', true),
            "No_Buku" => $this->input->post('No_Buku', true),
            "Tgl_Pinjam" => $this->input->post('Tgl_Pinjam', true),
            "Tgl_Kembali" => $this->input->post('Tgl_Kembali', true),
        ];

        $response = $this->_client->request("POST", "transaksi", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusDataTransaksi($No_Pinjam)
    {
        $response = $this->_client->request("DELETE", "transaksi", [
            "form_params" => [
                "No_Pinjam" => $No_Pinjam
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function ubahDataTransaksi()
    {
        $data = [
            "No_Pinjam" => $this->input->post('No_Pinjam', true),
            "Nama" => $this->input->post('Nama', true),
            "ID_Anggota" => $this->input->post('ID_Anggota', true),
            "No_Buku" => $this->input->post('No_Buku', true),
            "Tgl_Pinjam" => $this->input->post('Tgl_Pinjam', true),
            "Tgl_Kembali" => $this->input->post('Tgl_Kembali', true),
        ];

        $response = $this->_client->request("PUT", "transaksi", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
