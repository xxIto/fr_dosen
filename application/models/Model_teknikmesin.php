<?php

class Model_teknikmesin extends CI_Model {

	public function getData()
	{
		return $this->db->get('teknik_mesin')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('teknik_mesin', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('teknik_mesin', ['teknikmesin_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('teknik_mesin', ['teknikmesin_id' => $id])->row_array();
	}

	public function updateData($id, $data)
    {
        $this->db->where('teknikmesin_id', $id);
        $this->db->update('teknik_mesin', $data);
    }

	public function destroyData($id)
	{
		$this->db->delete('teknik_mesin', ['teknikmesin_id' => $id]);
	}

}
