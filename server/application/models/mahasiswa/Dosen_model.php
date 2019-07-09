<?php

class Dosen_model extends CI_Model
{

    private $database_mahasiswa;

    public function __construct()
    {
        parent::__construct();
        $this->database_mahasiswa = $this->load->database('database_mahasiswa', TRUE);
    }

    public function getDosen($nip = null)
    {

        if ($nip === null) {
            $this->database_mahasiswa->order_by('nama_dosen', 'ASC');
            return $this->database_mahasiswa->get("dosen")->result_array();
        } else {
            return $this->database_mahasiswa->get_where("dosen", ["nip" => $nip])->result_array();
        }
    }

    public function deleteDosen($nip)
    {
        $this->database_mahasiswa->delete("dosen", ["nip" => $nip]);
        return $this->database_mahasiswa->affected_rows();
    }

    public function createDosen($data)
    {
        $this->database_mahasiswa->insert("dosen", $data);
        return $this->database_mahasiswa->affected_rows();
    }

    public function updateDosen($data, $nip)
    {
        $this->database_mahasiswa->update("dosen", $data, ["nip" => $nip]);
        return $this->database_mahasiswa->affected_rows();
    }
}
