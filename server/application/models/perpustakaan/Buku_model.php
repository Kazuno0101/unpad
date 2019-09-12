<?php

class Buku_model extends CI_Model
{

    private $database_perpustakaan;

    public function __construct()
    {
        parent::__construct();
        $this->database_perpustakaan = $this->load->database('database_perpustakaan', TRUE);
    }

    public function getBuku($No_Buku = null)
    {

        if ($No_Buku === null) {
            $this->database_perpustakaan->order_by('Judul','ASC');
            return $this->database_perpustakaan->get("buku")->result_array();
        } else {
            return $this->database_perpustakaan->get_where("buku", ["No_Buku" => $No_Buku])->result_array();
        }
    }

    public function deleteBuku($No_Buku)
    {
        $this->database_perpustakaan->delete("buku", ["No_Buku" => $No_Buku]);
        return $this->database_perpustakaan->affected_rows();
    }

    public function createBuku($data)
    {
        $this->database_perpustakaan->insert("buku", $data);
        return $this->database_perpustakaan->affected_rows();
    }

    public function updateBuku($data, $No_Buku)
    {
        $this->database_perpustakaan->update("buku", $data, ["No_Buku" => $No_Buku]);
        return $this->database_perpustakaan->affected_rows();
    }
}
