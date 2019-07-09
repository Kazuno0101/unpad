<?php

class MataKuliah_model extends CI_Model
{

    private $database_mahasiswa;

    public function __construct()
    {
        parent::__construct();
        $this->database_mahasiswa = $this->load->database('database_mahasiswa', TRUE);
    }

    public function getMataKuliah($kode_mk = null)
    {
        
        if ($kode_mk === null) {
            $this->database_mahasiswa->order_by('nama_mk', 'ASC');
            return $this->database_mahasiswa->get("MataKuliah")->result_array();
        } else {
            return $this->database_mahasiswa->get_where("MataKuliah", ["kode_mk" => $kode_mk])->result_array();
        }
    }

    public function deleteMataKuliah($kode_mk)
    {
        $this->database_mahasiswa->delete("MataKuliah", ["kode_mk" => $kode_mk]);
        return $this->database_mahasiswa->affected_rows();
    }

    public function createMataKuliah($data)
    {
        $this->database_mahasiswa->insert("MataKuliah", $data);
        return $this->database_mahasiswa->affected_rows();
    }

    public function updateMataKuliah($data, $kode_mk)
    {
        $this->database_mahasiswa->update("MataKuliah", $data, ["kode_mk" => $kode_mk]);
        return $this->database_mahasiswa->affected_rows();
    }
}
