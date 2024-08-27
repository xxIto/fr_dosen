<?php

class Model_teknikinformatika extends CI_Model
{

	public function getData()
	{
		return $this->db->get('teknik_informatika')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('teknik_informatika', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('teknik_informatika', ['teknikinformatika_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('teknik_informatika', ['teknikinformatika_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{
		$this->db->where('teknikinformatika_id', $id);
		$this->db->update('teknik_informatika', $data);
	}

	public function destroyData($id)
	{
		$this->db->delete('teknik_informatika', ['teknikinformatika_id' => $id]);
	}

	public function getTotalData()
	{
		$this->db->select('COUNT(teknikinformatika_id) as total');
		$this->db->from('teknik_informatika');
		$query = $this->db->get();

		return $query->row()->total;
	}
}
