<?php

class Model_penempatan extends CI_Model {

	public function getData()
	{
		return $this->db->get('penempatan')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('penempatan', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('penempatan', ['penempatan_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('penempatan', ['penempatan_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{	
		$this->db->update('penempatan', $data, ['penempatan_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('penempatan', ['penempatan_id' => $id]);
	}

}
