<?php

/**
 * 
 */
class jabatan_model extends CI_model
{
	private $database_kepegawaian;

	public function __construct()
	{
		parent::__construct();
		$this->database_kepegawaian = $this->load->database('database_kepegawaian', TRUE);
	}
	public function getjabatan($Kode_jabatan = null)
	{
		if ($Kode_jabatan == null) {
			$this->database_kepegawaian->order_by('Id_karyawan', 'ASC');
			return $this->database_kepegawaian->get("jabatan")->result_array();
		} else {
			return $this->database_kepegawaian->get_where("jabatan", ["Kode_jabatan" => $Kode_jabatan])->result_array();
		}
	}
	public function deletejabatan($Kode_jabatan)
	{
		$this->database_kepegawaian->delete("jabatan", ["Kode_jabatan" => $Kode_jabatan]);
		return $this->database_kepegawaian->affected_rows();
	}

	public function createjabatan($data)
	{
		$this->database_kepegawaian->insert("jabatan", $data);
		return $this->database_kepegawaian->affected_rows();
	}

	public function updatejabatan($data, $Kode_jabatan)
	{
		$this->database_kepegawaian->update("jabatan", $data, ["Kode_jabatan" => $Kode_jabatan]);
		return $this->database_kepegawaian->affected_rows();
	}
}
