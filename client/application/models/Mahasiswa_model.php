<?php

use GuzzleHttp\Client;

class Mahasiswa_model extends CI_model
{

    private $_client;

    public function __construct()
    {


        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }

        $this->_client = new Client([
            "base_uri" => "http://localhost/pkl/tugas/server/mahasiswa/"
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


    public function tambahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama_mhs" => $this->input->post('nama_mhs', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true)
        ];

        $response = $this->_client->request("POST", "mahasiswa", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function tambahDataDosen()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "nama_dosen" => $this->input->post('nama_dosen', true)
        ];

        $response = $this->_client->request("POST", "dosen", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function tambahDataMataKuliah()
    {
        $data = [
            "kode_mk" => $this->input->post('kode_mk', true),
            "nama_mk" => $this->input->post('nama_mk', true),
            "sks" => $this->input->post('sks', true)
        ];

        $response = $this->_client->request("POST", "MataKuliah", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusData($nim)
    {
        $response = $this->_client->request("DELETE", "mahasiswa", [
            "form_params" => [
                "nim" => $nim
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusDataDosen($nip)
    {
        $response = $this->_client->request("DELETE", "dosen", [
            "form_params" => [
                "nip" => $nip
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusDataMataKuliah($kode_mk)
    {
        $response = $this->_client->request("DELETE", "matakuliah", [
            "form_params" => [
                "kode_mk" => $kode_mk
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama_mhs" => $this->input->post('nama_mhs', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true)
        ];

        $response = $this->_client->request("PUT", "mahasiswa", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

    public function ubahDataDosen()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "nama_dosen" => $this->input->post('nama_dosen', true)
        ];

        $response = $this->_client->request("PUT", "dosen", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataMataKuliah()
    {
        $data = [
            "kode_mk" => $this->input->post('kode_mk', true),
            "nama_mk" => $this->input->post('nama_mk', true),
            "sks" => $this->input->post('sks', true)
        ];

        $response = $this->_client->request("PUT", "matakuliah", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
