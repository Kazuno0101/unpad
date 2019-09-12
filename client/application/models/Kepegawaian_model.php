<?php

use GuzzleHttp\Client;

class Kepegawaian_model extends CI_model
{

    private $_client;

    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }

        $this->_client = new Client([
            "base_uri" => "http://localhost/pkl/tugas/server/kepegawaian/"
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


    public function tambahDataKaryawan()
    {
        $data = [
            "Id_karyawan" => $this->input->post('Id_karyawan', true),
            "Nama" => $this->input->post('Nama', true),
            "Alamat" => $this->input->post('Alamat', true),
            "No_telp" => $this->input->post('No_telp', true),
            "Jenis_kelamin" => $this->input->post('Jenis_kelamin', true),
            "Password" => $this->input->post('Password', true)
        ];

        $response = $this->_client->request("POST", "karyawan", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function tambahDataJabatan()
    {
        $data = [
            "Kode_jabatan" => $this->input->post('Kode_jabatan', true),
            "Id_karyawan" => $this->input->post('Id_karyawan', true),
            "Jabatan" => $this->input->post('Jabatan', true)
        ];

        $response = $this->_client->request("POST", "jabatan", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function tambahDataAbsensi()
    {
        $data = [
            "Id_absensi" => $this->input->post('Id_absensi', true),
            "Id_karyawan" => $this->input->post('Id_karyawan', true),
            "Tanggal_kerja" => $this->input->post('Tanggal_kerja', true)
        ];

        $response = $this->_client->request("POST", "absensi", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusDataKaryawan($Id_karyawan)
    {
        $response = $this->_client->request("DELETE", "karyawan", [
            "form_params" => [
                "Id_karyawan" => $Id_karyawan
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusDataJabatan($Kode_jabatan)
    {
        $response = $this->_client->request("DELETE", "jabatan", [
            "form_params" => [
                "Kode_jabatan" => $Kode_jabatan
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function hapusDataAbsensi($Id_absensi)
    {
        $response = $this->_client->request("DELETE", "absensi", [
            "form_params" => [
                "Id_absensi" => $Id_absensi
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result["data"];
    }

    public function ubahDataKaryawan()
    {
        $data = [
            "Id_karyawan" => $this->input->post('Id_karyawan', true),
            "Nama" => $this->input->post('Nama', true),
            "Alamat" => $this->input->post('Alamat', true),
            "No_telp" => $this->input->post('No_telp', true),
            "Jenis_kelamin" => $this->input->post('Jenis_kelamin', true),
            "Password" => $this->input->post('Password', true)
        ];

        $response = $this->_client->request("PUT", "karyawan", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataJabatan()
    {
        $data = [
            "Kode_jabatan" => $this->input->post('Kode_jabatan', true),
            "Id_karyawan" => $this->input->post('Id_karyawan', true),
            "Jabatan" => $this->input->post('Jabatan', true)
        ];

        $response = $this->_client->request("PUT", "jabatan", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataAbsensi()
    {
        $data = [
            "Id_absensi" => $this->input->post('Id_absensi', true),
            "Id_karyawan" => $this->input->post('Id_karyawan', true),
            "Tanggal_kerja" => $this->input->post('Tanggal_kerja', true)
        ];

        $response = $this->_client->request("PUT", "absensi", [
            "form_params" => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
