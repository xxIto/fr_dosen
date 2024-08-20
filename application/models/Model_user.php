<?php

class Model_user extends CI_Model {

	public function getData()
	{
		return $this->db->get('user')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('user', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('user', ['user_id' => $id])->row_array();
	}

	public function getDataByUsername($username) {
		return $this->db->get_where('user', ['username' => $username])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('user', ['user_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{	
		$this->db->update('user', $data, ['user_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('user', ['user_id' => $id]);
	}

}
