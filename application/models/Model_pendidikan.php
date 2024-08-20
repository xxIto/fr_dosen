<?php

class Model_pendidikan extends CI_Model {

	public function getData()
	{
		return $this->db->get('pendidikan')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('pendidikan', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('pendidikan', ['pendidikan_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('pendidikan', ['pendidikan_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{	
		$this->db->update('pendidikan', $data, ['pendidikan_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('pendidikan', ['pendidikan_id' => $id]);
	}

}
