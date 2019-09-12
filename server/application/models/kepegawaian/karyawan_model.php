<?php

/**
 * 
 */
class karyawan_model extends CI_model
{
    private $database_kepegawaian;

    public function __construct()
    {
        parent::__construct();
        $this->database_kepegawaian = $this->load->database("database_kepegawaian", TRUE);
    }
    public function getkaryawan($Id_karyawan = null)
    {

        if ($Id_karyawan === null) {
            $this->database_kepegawaian->order_by('Nama', 'ASC');
            return $this->database_kepegawaian->get("karyawan")->result_array();
        } else {
            return $this->database_kepegawaian->get_where("karyawan", ["Id_karyawan" => $Id_karyawan])->result_array();
        }
    }
    public function deletekaryawan($Id_karyawan)
    {
        $this->database_kepegawaian->delete("karyawan", ["Id_karyawan" => $Id_karyawan]);
        return $this->database_kepegawaian->affected_rows();
    }

    public function createkaryawan($data)
    {
        $this->database_kepegawaian->insert("karyawan", $data);
        return $this->database_kepegawaian->affected_rows();
    }

    public function updatekaryawan($data, $Id_karyawan)
    {
        $this->database_kepegawaian->update("karyawan", $data, ["Id_karyawan" => $Id_karyawan]);
        return $this->database_kepegawaian->affected_rows();
    }
}
