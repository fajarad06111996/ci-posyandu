<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('master'); //meload master model	
		date_default_timezone_set("Asia/Jakarta");// set timezone jekardah
		// if($this->session->userdata('id_siswa')==null){
			// redirect(base_url());
		// }
		//$this->load->library('googlemaps');
		$this->load->helper('tglid'); //tanggalindonesia
	}
	public function index()
	{
		$data['judul'] = 'E POSTYANDU || Halaman Utama';
		$data['tampil_informasi'] = $this->master->tampil_informasi();
		$this->load->view('dashboard/index', $data);
	}
	public function detail_informasi($id_informasi)
	{
		$data['judul'] = 'E POSTYANDU || Halaman Detail Informasi';
		$data['detail_informasi'] = $this->master->detail_informasi($id_informasi);
		$this->load->view('dashboard/detail_informasi', $data);
	}
	public function informasi()
	{
		$data['judul'] = 'E POSTYANDU || Halaman Informasi';
		$this->load->view('dashboard/informasi', $data);
	}
}
