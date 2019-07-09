<?php

class Mahasiswa_model extends CI_Model
{

    private $database_mahasiswa;

    public function __construct()
    {
        parent::__construct();
        $this->database_mahasiswa = $this->load->database('database_mahasiswa', TRUE);
    }

    public function getMahasiswa($nim = null)
    {

        if ($nim === null) {
            $this->database_mahasiswa->order_by('nama_mhs', 'ASC');
            return $this->database_mahasiswa->get("mahasiswa")->result_array();
        } else {
            return $this->database_mahasiswa->get_where("mahasiswa", ["nim" => $nim])->result_array();
        }
    }

    public function deleteMahasiswa($nim)
    {
        $this->database_mahasiswa->delete("mahasiswa", ["nim" => $nim]);
        return $this->database_mahasiswa->affected_rows();
    }

    public function createMahasiswa($data)
    {
        $this->database_mahasiswa->insert("mahasiswa", $data);
        return $this->database_mahasiswa->affected_rows();
    }

    public function updateMahasiswa($data, $nim)
    {
        $this->database_mahasiswa->update("mahasiswa", $data, ["nim" => $nim]);
        return $this->database_mahasiswa->affected_rows();
    }
}
