<?php

class Get_model extends CI_Model{

      public function getAllTable($id = null)
      {
          if ($id === null) {
            return $this->db->get("api")->result_array();
          } else {
            return $this->db->get_where("api", ["id" => $id])->result_array();
          }
      }

}