<?php

class Model_teknikelektro extends CI_Model {

	public function getData()
	{
		return $this->db->get('teknik_elektro')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('teknik_elektro', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('teknik_elektro', ['teknikelektro_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('teknik_elektro', ['teknikelektro_id' => $id])->row_array();
	}

	public function updateData($id, $data)
    {
        $this->db->where('teknikelektro_id', $id);
        $this->db->update('teknik_elektro', $data);
    }

	public function destroyData($id)
	{
		$this->db->delete('teknik_elektro', ['teknikelektro_id' => $id]);
	}

}
