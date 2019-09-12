<?php

class Transaksi_model extends CI_Model
{

    private $database_perpustakaan;

    public function __construct()
    {
        parent::__construct();
        $this->database_perpustakaan = $this->load->database('database_perpustakaan', TRUE);
    }

    public function getTransaksi($No_Pinjam = null)
    {

        if ($No_Pinjam === null) {
            $this->database_perpustakaan->order_by('Nama','ASC');
            return $this->database_perpustakaan->get("transaksi")->result_array();
        } else {
            return $this->database_perpustakaan->get_where("transaksi", ["No_Pinjam" => $No_Pinjam])->result_array();
        }
    }

    public function deleteTransaksi($No_Pinjam)
    {
        $this->database_perpustakaan->delete("transaksi", ["No_Pinjam" => $No_Pinjam]);
        return $this->database_perpustakaan->affected_rows();
    }

    public function createTransaksi($data)
    {
        $this->database_perpustakaan->insert("transaksi", $data);
        return $this->database_perpustakaan->affected_rows();
    }

    public function updateTransaksi($data, $No_Pinjam)
    {
        $this->database_perpustakaan->update("transaksi", $data, ["No_Pinjam" => $No_Pinjam]);
        return $this->database_perpustakaan->affected_rows();
    }
}
