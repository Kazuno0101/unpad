<?php

/**
 * 
 */
class absensi_model extends CI_model
{
    private $database_kepegawaian;

    public function __construct()
    {
        parent::__construct();
        $this->database_kepegawaian = $this->load->database('database_kepegawaian', TRUE);
    }

    public function getabsensi($Id_absensi = null)
    {

        if ($Id_absensi === null) {
            $this->database_kepegawaian->order_by('Id_absensi', 'ASC');
            return $this->database_kepegawaian->get("absensi")->result_array();
        } else {
            return $this->database_kepegawaian->get_where("absensi", ["Id_absensi" => $Id_absensi])->result_array();
        }
    }

    public function deleteabsensi($Id_absensi)
    {
        $this->database_kepegawaian->delete("absensi", ["Id_absensi" => $Id_absensi]);
        return $this->database_kepegawaian->affected_rows();
    }

    public function createabsensi($data)
    {
        $this->database_kepegawaian->insert("absensi", $data);
        return $this->database_kepegawaian->affected_rows();
    }

    public function updateabsensi($data, $Id_Absensi)
    {
        $this->database_kepegawaian->update("absensi", $data, ["Id_Absensi" => $Id_Absensi]);
        return $this->database_kepegawaian->affected_rows();
    }
}
