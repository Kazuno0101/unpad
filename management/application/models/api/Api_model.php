<?php

class Api_model extends CI_Model
{

  public function getAllTable($id = null)
  {
    if ($id === null) {
      return $this->db->get("api")->result_array();
    } else {
      return $this->db->get_where("api", ["id" => $id])->row_array();
    }
  }

  public function getTableApi($api)
  {
    $this->db->select('*');
    $this->db->from('api');
    $this->db->where('type', $api);
    return $this->db->get()->result_array();
  }

  public function create()
  {
    $data = [
      "id" => $this->input->post('id', true),
      "apiName" => $this->input->post('apiName', true),
      "type" => $this->input->post('type', true),
      "url" => $this->input->post('url', true),
      "status" => $this->input->post('status', true)
    ];

    $this->db->insert('api', $data);
  }

  public function delete($id)
  {
    $this->db->delete("api", ["id" => $id]);
  }

  public function edit()
  {
    $data = [
      "apiName" => $this->input->post('apiName', true),
      "type" => $this->input->post('type', true),
      "url" => $this->input->post('url', true),
      "status" => $this->input->post('status', true)
    ];

    $this->db->where("id", $this->input->post('id'));
    $this->db->update('api', $data);
  }
}
