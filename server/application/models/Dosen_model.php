<?php

class Dosen_model extends CI_Model
{

    public function getDosen($No = null)
    {

        if ($No === null) {
            $this->db->order_by('Nama_Dosen', 'ASC');
            return $this->db->get("dosen")->result_array();
        } else {
            return $this->db->get_where("dosen", ["No" => $No])->result_array();
        }
    }

    public function deleteDosen($No)
    {
        $this->db->delete("dosen", ["No" => $No]);
        return $this->db->affected_rows();
    }

    public function createDosen($data)
    {
        $this->db->insert("dosen", $data);
        return $this->db->affected_rows();
    }

    public function updateDosen($data, $id)
    {
        $this->db->update("dosen", $data, ["id" => $id]);
        return $this->db->affected_rows();
    }
}
