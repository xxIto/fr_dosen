<?php

class Model_jurusan extends CI_Model {

	public function getData()
	{
		return $this->db->get('jurusan')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('jurusan', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('jurusan', ['jurusan_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('jurusan', ['jurusan_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{	
		$this->db->update('jurusan', $data, ['jurusan_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('jurusan', ['jurusan_id' => $id]);
	}

}
