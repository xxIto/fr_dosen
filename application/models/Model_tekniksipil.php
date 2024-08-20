<?php

class Model_tekniksipil extends CI_Model {

	public function getData()
	{
		return $this->db->get('teknik_sipil')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('teknik_sipil', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('teknik_sipil', ['tekniksipil_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('teknik_sipil', ['tekniksipil_id' => $id])->row_array();
	}

	public function updateData($id, $data)
    {
        $this->db->where('tekniksipil_id', $id);
        $this->db->update('teknik_sipil', $data);
    }

	public function destroyData($id)
	{
		$this->db->delete('teknik_sipil', ['tekniksipil_id' => $id]);
	}

}
