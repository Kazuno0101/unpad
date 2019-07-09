<?php

class MataKuliah_model extends CI_Model
{

    public function getMataKuliah($id = null)
    {
        if ($id === null) {
            return $this->db->get("mata_kuliah")->result_array();
        } else {
            return $this->db->get_where("mata_kuliah", ["id" => $id])->result_array();
        }
    }

    public function deleteMataKuliah($id)
    {
        $this->db->delete("mata_kuliah", ["id" => $id]);
        return $this->db->affected_rows();
    }

    public function createMataKuliah($data)
    {
        $this->db->insert("mata_kuliah", $data);
        return $this->db->affected_rows();
    }

    public function updateMataKuliah($data, $id)
    {
        $this->db->update("mata_kuliah", $data, ["id" => $id]);
        return $this->db->affected_rows();
    }
}
