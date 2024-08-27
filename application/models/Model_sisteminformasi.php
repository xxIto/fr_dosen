<?php

class Model_sisteminformasi extends CI_Model
{

	public function getData()
	{
		return $this->db->get('sistem_informasi')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('sistem_informasi', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('sistem_informasi', ['sisteminformasi_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('sistem_informasi', ['sisteminformasi_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{
		$this->db->where('sisteminformasi_id', $id);
		$this->db->update('sistem_informasi', $data);
	}

	public function destroyData($id)
	{
		$this->db->delete('sistem_informasi', ['sisteminformasi_id' => $id]);
	}

	public function getTotalData()
	{
		$this->db->select('COUNT(sisteminformasi_id) as total');
		$this->db->from('sistem_informasi');
		$query = $this->db->get();

		return $query->row()->total;
	}
}
