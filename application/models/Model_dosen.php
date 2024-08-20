<?php

class Model_dosen extends CI_Model
{

	public function getTotalDosen()
	{
		$this->db->select('COUNT(dosen_id) as total');
		$this->db->from('dosen');
		$query = $this->db->get();

		return $query->row()->total;
	}

	public function getStatusPegawaiStatistics()
	{
		$this->db->select('status_pegawai, COUNT(dosen_id) as total');
		$this->db->from('dosen');
		$this->db->group_by('status_pegawai');
		$query = $this->db->get();

		return $query->result_array();
	}



	// Mengambil data dosen dengan informasi jabatan, pendidikan, dan jurusan
	public function getData()
	{
		return $this->db->select('dosen.*, jabatan.nama as jabatan_nama, pendidikan.nama as pendidikan_nama, jurusan.nama as jurusan_nama')
			->join('jabatan', 'jabatan.jabatan_id = dosen.id_jabatan', 'left')
			->join('pendidikan', 'pendidikan.pendidikan_id = dosen.id_pendidikan', 'left')
			->join('jurusan', 'jurusan.jurusan_id = dosen.id_jurusan', 'left')
			->get('dosen')->result_array();
	}

	// Mengambil statistik status dosen per jurusan
	public function getStatusStatistics()
	{
		$this->db->select('jurusan.nama as jurusan_nama, dosen.status, COUNT(dosen.dosen_id) as total');
		$this->db->from('dosen');
		$this->db->join('jurusan', 'jurusan.jurusan_id = dosen.id_jurusan', 'left');
		$this->db->group_by('jurusan.nama, dosen.status');
		$query = $this->db->get();

		return $query->result_array();
	}

	// Mengambil statistik jumlah dosen berdasarkan status per jurusan
	public function getJurusanStatusStatistics()
	{
		$this->db->select('jurusan.nama as jurusan_nama, 
			SUM(CASE WHEN dosen.status = "aktif" THEN 1 ELSE 0 END) as aktif, 
			SUM(CASE WHEN dosen.status = "tugas_belajar" THEN 1 ELSE 0 END) as tubel,
			SUM(CASE WHEN dosen.status_pegawai = "pppk" THEN 1 ELSE 0 END) as pppk, 
			SUM(CASE WHEN dosen.status_pegawai = "pns" THEN 1 ELSE 0 END) as pns, 
			SUM(CASE WHEN dosen.status_pegawai = "non_asn" THEN 1 ELSE 0 END) as non_asn');
		$this->db->from('dosen');
		$this->db->join('jurusan', 'jurusan.jurusan_id = dosen.id_jurusan', 'left');
		$this->db->group_by('jurusan.nama');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getJurusanStatusStatisticsASN()
	{
		// Mengambil statistik jumlah dosen berdasarkan status (PPPK, PNS, NON PNS) per jurusan
		$this->db->select('jurusan.nama as jurusan_nama, 
        SUM(CASE WHEN dosen.status_pegawai = "pppk" THEN 1 ELSE 0 END) as pppk, 
        SUM(CASE WHEN dosen.status_pegawai = "pns" THEN 1 ELSE 0 END) as pns, 
        SUM(CASE WHEN dosen.status_pegawai = "non_asn" THEN 1 ELSE 0 END) as non_asn');
		$this->db->from('dosen');
		$this->db->join('jurusan', 'jurusan.jurusan_id = dosen.id_jurusan', 'left');
		$this->db->group_by('jurusan.nama');
		$query = $this->db->get();

		return $query->result_array();
	}



	// Menyimpan data dosen baru ke dalam database
	public function storeData($data)
	{
		$this->db->insert('dosen', $data);
	}

	// Menampilkan data dosen berdasarkan ID
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

	// Mengambil data dosen berdasarkan ID untuk diedit
	public function editData($id)
	{
		return $this->db->get_where('dosen', ['dosen_id' => $id])->row_array();
	}

	// Memperbarui data dosen berdasarkan ID
	public function updateData($id, $data)
	{
		$this->db->update('dosen', $data, ['dosen_id' => $id]);
	}

	// Menghapus data dosen berdasarkan ID
	public function destroyData($id)
	{
		$this->db->delete('dosen', ['dosen_id' => $id]);
	}
}
