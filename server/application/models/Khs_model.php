<?php

class Khs_model extends CI_Model
{

    public function getKhs($id = null)
    {
        if ($id === null) {
            return $this->db->get("khs")->result_array();
        } else {
            return $this->db->get_where("khs", ["id" => $id])->result_array();
        }
    }

    public function deleteKhs($id)
    {
        $this->db->delete("khs", ["id" => $id]);
        return $this->db->affected_rows();
    }

    public function createKhs($data)
    {
        $this->db->insert("khs", $data);
        return $this->db->affected_rows();
    }

    public function updateKhs($data, $id)
    {
        $this->db->update("khs", $data, ["id" => $id]);
        return $this->db->affected_rows();
    }
}
