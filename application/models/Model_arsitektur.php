<?php

class Model_arsitektur extends CI_Model {

	public function getData()
	{
		return $this->db->get('arsitektur')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('arsitektur', $data);
	}

	public function showData($id)
	{
		return $this->db->get_where('arsitektur', ['arsitektur_id' => $id])->row_array();
	}

	public function editData($id)
	{
		return $this->db->get_where('arsitektur', ['arsitektur_id' => $id])->row_array();
	}

	public function updateData($id, $data)
    {
        $this->db->where('arsitektur_id', $id);
        $this->db->update('arsitektur', $data);
    }

	public function destroyData($id)
	{
		$this->db->delete('arsitektur', ['arsitektur_id' => $id]);
	}

}
