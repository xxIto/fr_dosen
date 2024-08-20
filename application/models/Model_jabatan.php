<?php

class Model_jabatan extends CI_Model {

	public function getData()
	{
		return $this->db->get('jabatan')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('jabatan', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('jabatan', ['jabatan_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('jabatan', ['jabatan_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{	
		$this->db->update('jabatan', $data, ['jabatan_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('jabatan', ['jabatan_id' => $id]);
	}

}
