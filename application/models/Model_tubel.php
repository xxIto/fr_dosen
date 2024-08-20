<?php

class Model_tubel extends CI_Model {

	public function getData()
	{
    return $this->db->select('tubel.*, jabatan.nama as jabatan_nama, jurusan.nama as jurusan_nama, dosen.nidn as dosen_nidn, dosen.nama as dosen_nama')
      ->join('jabatan', 'jabatan.jabatan_id = tubel.id_jabatan', 'left')
      ->join('dosen', 'dosen.dosen_id = tubel.id_dosen', 'left')
      ->join('jurusan','jurusan.jurusan_id = tubel.id_jurusan', 'left')
      ->get('tubel')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('tubel', $data);
	}

	public function showData($id)
	{		
    $query = $this->db->select('tubel.*, jabatan.nama as jabatan_nama, jurusan.nama as jurusan_nama, dosen.nidn as dosen_nidn, dosen.nama as dosen_nama')
      ->join('jabatan','jabatan.jabatan_id = tubel.id_jabatan', 'left')
	  ->join('dosen', 'dosen.dosen_id = tubel.id_dosen', 'left')
      ->join('jurusan','jurusan.jurusan_id = tubel.id_jurusan', 'left')
      ->where('tubel.tubel_id', $id)
      ->get('tubel')->row_array();

    return $query;
	}

	public function editData($id)
	{
		return $this->db->get_where('tubel', ['tubel_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{	
		$this->db->update('tubel', $data, ['tubel_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('tubel', ['tubel_id' => $id]);
	}

}
