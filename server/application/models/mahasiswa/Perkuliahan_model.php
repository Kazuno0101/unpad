<?php

class Perkuliahan_model extends CI_Model
{

    private $database_mahasiswa;

    public function __construct()
    {
        parent::__construct();
        $this->database_mahasiswa = $this->load->database('database_mahasiswa', TRUE);
    }

    public function getPerkuliahan($id = null)
    {

        if ($id === null) {
            $this->database_mahasiswa->order_by('id', 'ASC');
            return $this->database_mahasiswa->get("Perkuliahan")->result_array();
        } else {
            return $this->database_mahasiswa->get_where("Perkuliahan", ["id" => $id])->result_array();
        }
    }

    public function deletePerkuliahan($id)
    {
        $this->database_mahasiswa->delete("Perkuliahan", ["id" => $id]);
        return $this->database_mahasiswa->affected_rows();
    }

    public function createPerkuliahan($data)
    {
        $this->database_mahasiswa->insert("Perkuliahan", $data);
        return $this->database_mahasiswa->affected_rows();
    }

    public function updatePerkuliahan($data, $id)
    {
        $this->database_mahasiswa->update("Perkuliahan", $data, ["id" => $id]);
        return $this->database_mahasiswa->affected_rows();
    }
}
