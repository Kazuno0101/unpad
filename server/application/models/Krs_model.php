<?php

class Krs_model extends CI_Model
{

    public function getKrs($id = null)
    {
        if ($id === null) {
            return $this->db->get("krs")->result_array();
        } else {
            return $this->db->get_where("krs", ["id" => $id])->result_array();
        }
    }

    public function deleteKrs($id)
    {
        $this->db->delete("krs", ["id" => $id]);
        return $this->db->affected_rows();
    }

    public function createKrs($data)
    {
        $this->db->insert("krs", $data);
        return $this->db->affected_rows();
    }

    public function updateKrs($data, $id)
    {
        $this->db->update("krs", $data, ["id" => $id]);
        return $this->db->affected_rows();
    }
}
