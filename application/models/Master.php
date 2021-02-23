<?php defined('BASEPATH') OR exit('No direct script access allowed');

class master extends CI_Model{
	function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");// set timezone jekardah	
	}
	public function loginadmin($data){
		$jalan = $this->db->get_where('tbl_admin', $data);
		return $jalan;
	}
	public function dataloginadmin($username)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_admin` where username = '$username'");
		return $jalan->result();
	}
	public function loginbalita($data)
	{
		$jalan = $this->db->get_where('tbl_balita', $data);
		return $jalan;
	}
	public function dataloginbalita($username)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_balita` where username = '$username'");
		return $jalan->result();
	}
	public function tambah_balita($data)
	{
		$jalan = $this->db->insert('tbl_balita', $data);
		return $jalan;
	}
	public function tampil_balita()
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_balita` order by id_balita asc");
		return $jalan->result();
	}
	public function tampil_balita_balita($nik)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_balita` where nik = '$nik' order by id_balita asc");
		return $jalan->result();
	}
	public function edit_data_balita($id_balita)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_balita` where id_balita = '$id_balita'");
		return $jalan->result();
	}
	public function simpan_balita($data, $id_balita)
	{
		$this->db->where('id_balita', $id_balita);
		$this->db->update('tbl_balita', $data);
		return true;
	}
	public function hapus_data_balita($id_balita)
	{
		$jalan = $this->db->query("DELETE FROM `tbl_balita` where id_balita = '$id_balita'");
		return $jalan;
	}
	public function tampil_master_imunisasi()
	{
		$jalan = $this->db->query("SELECT * FROM `master_imunisasi` order by id_master_imunisasi asc");
		return $jalan->result();
	}
	public function tambah_master_imunisasi($data)
	{
		$jalan = $this->db->insert('master_imunisasi', $data);
		return $jalan;
	}
	public function lihat_balita()
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_balita` order by nama_balita desc");
		return $jalan->result();
	}
	public function lihat_imunisasi()
	{
		$jalan = $this->db->query("SELECT * FROM `master_imunisasi` order by imunisasi desc");
		return $jalan->result();
	}
	public function tampil_imunisasi()
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_imunisasi`, master_imunisasi, tbl_balita 
									where tbl_imunisasi.id_balita = tbl_balita.id_balita 
										and tbl_imunisasi.id_master_imunisasi = master_imunisasi.id_master_imunisasi 
											order by tbl_balita.nama_balita desc");
		return $jalan->result();
	}
	public function tampil_imunisasi_balita($nik)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_imunisasi`, master_imunisasi, tbl_balita 
									where tbl_imunisasi.id_balita = tbl_balita.id_balita 
										and tbl_imunisasi.id_master_imunisasi = master_imunisasi.id_master_imunisasi 
											and tbl_balita.nik = '$nik' order by tbl_balita.nama_balita desc");
		return $jalan->result();
	}
	public function edit_data_imunisasi($id_imunisasi)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_imunisasi`, master_imunisasi, tbl_balita 
									where tbl_imunisasi.id_balita = tbl_balita.id_balita 
										and tbl_imunisasi.id_master_imunisasi = master_imunisasi.id_master_imunisasi .
										and tbl_imunisasi.id_imunisasi = '$id_imunisasi'");
		return $jalan->result();
	}
	public function simpan_imunisasi($data, $id_imunisasi)
	{
		$this->db->where('id_imunisasi', $id_imunisasi);
		$this->db->update('tbl_imunisasi', $data);
		return true;
	}
	public function hapus_data_imunisasi($id_imunisasi)
	{
		$jalan = $this->db->query("DELETE FROM `tbl_imunisasi` where id_imunisasi = '$id_imunisasi'");
		return $jalan;
	}
	public function tambah_imunisasi($data)
	{
		$jalan = $this->db->insert('tbl_imunisasi', $data);
		return $jalan;
	}
	public function tampil_gizi()
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_gizi`, tbl_balita 
									where tbl_balita.id_balita = tbl_gizi.id_balita 
										order by tbl_balita.nama_balita desc");
		return $jalan->result();
	}
	public function tampil_gizi_balita($nik)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_gizi`, tbl_balita 
									where tbl_balita.id_balita = tbl_gizi.id_balita 
										and tbl_balita.nik = '$nik' order by tbl_balita.nama_balita desc");
		return $jalan->result();
	}
	public function tambah_gizi($data)
	{
		$jalan = $this->db->insert('tbl_gizi', $data);
		return $jalan;
	}
	public function tampil_master_ibuhamil()
	{
		$jalan = $this->db->query("SELECT * FROM `master_ibuhamil` order by awal_hamil desc");
		return $jalan->result();
	}
	public function tambah_master_ibuhamil($data)
	{
		$jalan = $this->db->insert('master_ibuhamil`', $data);
		return $jalan;
	}
	public function lihat_ibuhamil()
	{
		$jalan = $this->db->query("SELECT * FROM `master_ibuhamil` order by awal_hamil desc");
		return $jalan->result();
	}
	public function tampil_ibuhamil()
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_ibuhamil`, master_ibuhamil where tbl_ibuhamil.id_master_ibuhamil = master_ibuhamil.id_master_ibuhamil order by tbl_ibuhamil.tgl_kegiatan desc");
		return $jalan->result();
	}
	public function edit_data_ibuhamil($id_ibuhamil)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_ibuhamil`, master_ibuhamil where tbl_ibuhamil.id_master_ibuhamil = master_ibuhamil.id_master_ibuhamil and tbl_ibuhamil.id_ibuhamil = '$id_ibuhamil'");
		return $jalan->result();
	}
	public function simpan_ibuhamili($data, $id_ibuhamil)
	{
		$this->db->where('id_ibuhamil', $id_ibuhamil);
		$this->db->update('tbl_ibuhamil', $data);
		return true;
	}
	public function hapus_data_ibuhamil($id_ibuhamil)
	{
		$jalan = $this->db->query("DELETE FROM `tbl_ibuhamil` where id_ibuhamil = '$id_ibuhamil'");
		return $jalan;
	}
	public function tambah_ibuhamil($data)
	{
		$jalan = $this->db->insert('tbl_ibuhamil', $data);
		return $jalan;
	}
	public function edit_data_gizi($id_gizi)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_gizi`, tbl_balita where tbl_gizi.id_balita = tbl_balita.id_balita and tbl_gizi.id_gizi = '$id_gizi'");
		return $jalan->result();
	}
	public function detail_data_gizi($id_balita)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_gizi`, tbl_balita where tbl_gizi.id_balita = tbl_balita.id_balita and tbl_gizi.id_balita = '$id_balita' order by tbl_gizi.tgl_gizi asc");
		return $jalan->result();
	}
	public function laporan_data_gizi($id_balita)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_gizi`, tbl_balita where tbl_gizi.id_balita = tbl_balita.id_balita and tbl_gizi.id_balita = '$id_balita' order by tbl_gizi.tgl_gizi asc");
		return $jalan->result();
	}
	public function simpan_gizi($data, $id_gizi)
	{
		$this->db->where('id_gizi', $id_gizi);
		$this->db->update('tbl_gizi', $data);
		return true;
	}
	public function hapus_data_gizi($id_gizi)
	{
		$jalan = $this->db->query("DELETE FROM `tbl_gizi` where id_gizi = '$id_gizi'");
		return $jalan;
	}
	public function detail_data_imunisasi($id_balita)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_imunisasi`, master_imunisasi, tbl_balita where tbl_imunisasi.id_master_imunisasi = master_imunisasi.id_master_imunisasi and tbl_imunisasi.id_balita = tbl_balita.id_balita and tbl_imunisasi.id_balita = '$id_balita' order by tbl_imunisasi.tgl_imunisasi desc");
		return $jalan->result();
	}
	public function laporan_data_imunisasi($id_balita)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_imunisasi`, master_imunisasi, tbl_balita where tbl_imunisasi.id_master_imunisasi = master_imunisasi.id_master_imunisasi and tbl_imunisasi.id_balita = tbl_balita.id_balita and tbl_imunisasi.id_balita = '$id_balita' order by tbl_imunisasi.tgl_imunisasi desc");
		return $jalan->result();
	}
	public function master_admin()
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_admin` order by id_admin desc");
		return $jalan->result();
	}
	public function tambah_admin($data)
	{
		$jalan = $this->db->insert('tbl_admin', $data);
		return $jalan;
	}
	public function hapus_admin($id_admin)
	{
		$jalan = $this->db->query("DELETE FROM `tbl_admin` where id_admin = '$id_admin'");
		return $jalan;
	}
	public function tambah_informasi($data)
	{
		$jalan = $this->db->insert('tbl_informasi', $data);
		return $jalan;
	}
	public function tampil_informasi()
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_informasi` order by tgl_informasi desc");
		return $jalan->result();
	}
	public function edit_informasi($id_informasi)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_informasi` where id_informasi = '$id_informasi'");
		return $jalan->result();
	}
	public function detail_informasi($id_informasi)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_informasi` where id_informasi = '$id_informasi'");
		return $jalan->result();
	}
	public function simpan_informasi($data, $id_informasi)
	{
		$this->db->where('id_informasi', $id_informasi);
		$this->db->update('tbl_informasi', $data);
		return true;
	}
	public function hapus_informasi($id_informasi)
	{
		$jalan = $this->db->query("DELETE FROM `tbl_informasi` where id_informasi = '$id_informasi'");
		return $jalan;
	}
	public function cek_balita($id_balita)
	{
		$jalan = $this->db->query("SELECT * FROM `tbl_balita` where id_balita = '$id_balita'");
		return $jalan->result();
	}
}

