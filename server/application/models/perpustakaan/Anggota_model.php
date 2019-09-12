<?php

class Anggota_model extends CI_Model
{

    private $database_perpustakaan;

    public function __construct()
    {
        parent::__construct();
        $this->database_perpustakaan = $this->load->database('database_perpustakaan', TRUE);
    }

    public function getAnggota($ID_Anggota = null)
    {

        if ($ID_Anggota === null) {
            $this->database_perpustakaan->order_by('Nama','ASC');
            return $this->database_perpustakaan->get("anggota")->result_array();
        } else {
            return $this->database_perpustakaan->get_where("anggota", ["ID_Anggota" => $ID_Anggota])->result_array();
        }
    }

    public function deleteAnggota($ID_Anggota)
    {
        $this->database_perpustakaan->delete("anggota", ["ID_Anggota" => $ID_Anggota]);
        return $this->database_perpustakaan->affected_rows();
    }

    public function createAnggota($data)
    {
        $this->database_perpustakaan->insert("anggota", $data);
        return $this->database_perpustakaan->affected_rows();
    }

    public function updateAnggota($data, $ID_Anggota)
    {
        $this->database_perpustakaan->update("anggota", $data, ["ID_Anggota" => $ID_Anggota]);
        return $this->database_perpustakaan->affected_rows();
    }
}
