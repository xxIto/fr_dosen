<?php

class Model_tendik extends CI_Model
{

	public function getData()
	{
		return $this->db->select('tendik.*, jabatan.nama as jabatan_nama, pendidikan.nama as pendidikan_nama, penempatan.nama as penempatan_nama')
			->join('jabatan', 'jabatan.jabatan_id = tendik.id_jabatan', 'left')
			->join('pendidikan', 'pendidikan.pendidikan_id = tendik.id_pendidikan', 'left')
			->join('penempatan', 'penempatan.penempatan_id = tendik.id_penempatan', 'left')
			->get('tendik')->result_array();
	}

	public function storeData($data)
	{
		$this->db->insert('tendik', $data);
	}

	public function showData($id)
	{
		$query = $this->db->select('tendik.*, jabatan.nama as jabatan_nama, pendidikan.nama as pendidikan_nama, penempatan.nama as penempatan_nama')
			->join('jabatan', 'jabatan.jabatan_id = tendik.id_jabatan', 'left')
			->join('pendidikan', 'pendidikan.pendidikan_id = tendik.id_pendidikan', 'left')
			->join('penempatan', 'penempatan.penempatan_id = tendik.id_penempatan', 'left')
			->where('tendik.tendik_id', $id)
			->get('tendik')->row_array();

		return $query;
	}

	public function editData($id)
	{
		return $this->db->get_where('tendik', ['tendik_id' => $id])->row_array();
	}

	public function updateData($id, $data)
	{
		$this->db->update('tendik', $data, ['tendik_id' => $id]);
	}

	public function destroyData($id)
	{
		$this->db->delete('tendik', ['tendik_id' => $id]);
	}

	// ===== NEW =====
	public function countTotalTendik()
	{
		return $this->db->count_all_results('tendik');
	}
}
