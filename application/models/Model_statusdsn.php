<?php

class Model_dosen extends CI_Model
{

	public function getData()
	{
		return $this->db->select('dosen.*, jabatan.nama as jabatan_nama, pendidikan.nama as pendidikan_nama, jurusan.nama as jurusan_nama')
			->join('jabatan', 'jabatan.jabatan_id = dosen.id_jabatan', 'left')
			->join('pendidikan', 'pendidikan.pendidikan_id = dosen.id_pendidikan', 'left')
			->join('jurusan', 'jurusan.jurusan_id = dosen.id_jurusan', 'left')
			->get('dosen')->result_array();
	}

	public function getStatusStatistics()
	{
		$this->db->select('jurusan.nama as jurusan_nama, dosen.status, COUNT(dosen.dosen_id) as total');
		$this->db->from('dosen');
		$this->db->join('jurusan', 'jurusan.jurusan_id = dosen.id_jurusan', 'left');
		$this->db->group_by('jurusan.nama, dosen.status');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('dosen', $data);
	}

	public function showData($id)
	{
		$query = $this->db->select('dosen.*, jabatan.nama as jabatan_nama, pendidikan.nama as pendidikan_nama, jurusan.nama as jurusan_nama')
			->join('jabatan', 'jabatan.jabatan_id = dosen.id_jabatan', 'left')
			->join('pendidikan', 'pendidikan.pendidikan_id = dosen.id_pendidikan', 'left')
			->join('jurusan', 'jurusan.jurusan_id = dosen.id_jurusan', 'left')
			->where('dosen.dosen_id', $id)
			->get('dosen')->row_array();

		return $query;
	}

	public function editData($id)
	{
		return $this->db->get_where('dosen', ['dosen_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{
		$this->db->update('dosen', $data, ['dosen_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('dosen', ['dosen_id' => $id]);
	}
}
