<?php

class Model_pppk extends CI_Model
{

	public function getData()
	{
		return $this->db->select('pppk.*, jabatan.nama as jabatan_nama, jabatan_pppk.nama as jabatan_nama_pppk, jurusan.nama as jurusan_nama, dosen.nidn as dosen_nidn, dosen.nama as dosen_nama')
			->join('jabatan', 'jabatan.jabatan_id = pppk.id_jabatan', 'left')
			->join('jabatan as jabatan_pppk', 'jabatan_pppk.jabatan_id = pppk.id_jabatan_pppk', 'left')
			->join('dosen', 'dosen.dosen_id = pppk.id_dosen', 'left')
			->join('jurusan', 'jurusan.jurusan_id = pppk.id_jurusan', 'left')
			->get('pppk')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('pppk', $data);
	}

	public function showData($id)
	{
		$query = $this->db->select('pppk.*, jabatan.nama as jabatan_nama, jabatan_pppk.nama as jabatan_nama_pppk, jurusan.nama as jurusan_nama, dosen.nidn as dosen_nidn, dosen.nama as dosen_nama')
			->join('jabatan', 'jabatan.jabatan_id = pppk.id_jabatan', 'left')
			->join('jabatan as jabatan_pppk', 'jabatan_pppk.jabatan_id = pppk.id_jabatan_pppk', 'left')
			->join('dosen', 'dosen.dosen_id = pppk.id_dosen', 'left')
			->join('jurusan', 'jurusan.jurusan_id = pppk.id_jurusan', 'left')
			->where('pppk.pppk_id', $id)
			->get('pppk')->row_array();

		return $query;
	}

	public function editData($id)
	{
		return $this->db->get_where('pppk', ['pppk_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{
		$this->db->update('pppk', $data, ['pppk_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('pppk', ['pppk_id' => $id]);
	}

	// ===== NEW =====
	public function countTotalPPPK()
	{
		return $this->db->count_all_results('pppk');
	}
}
