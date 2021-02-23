<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balita extends CI_Controller {
	function __construct(){
	parent::__construct();
		// if($this->session->userdata('id_admin') == ""){
			// redirect(base_url('app/index'));
		// }
		$this->load->model('master'); 
		date_default_timezone_set("Asia/Jakarta");// meload master model
		//$this->load->library('googlemaps');
		$this->load->helper('tglid'); //tanggalindonesia
		
		//$this->load->library('ciqrcode'); 
	}
	public function index()
	{
		$data['judul'] = 'Balita || Home';
		$nik = $this->session->userdata('nik');
		$id_balita = $this->session->userdata('id_balita');
		$this->load->view('Balita/header', $data);
		$this->load->view('Balita/index');
		$this->load->view('Balita/footer');
	}
	public function data_balita()
	{
		$data['judul'] = 'Balita || Home';
		$nik = $this->session->userdata('nik');
		$id_balita = $this->session->userdata('id_balita');
		$this->load->view('Balita/header', $data);
		$data['tampil_balita'] = $this->master->tampil_balita_balita($nik);
		$this->load->view('Balita/data_balita', $data);
		$this->load->view('Balita/footer');
	}
	public function data_imunisasi()
	{
		$data['judul'] = 'Balita || Home';
		$nik = $this->session->userdata('nik');
		$id_balita = $this->session->userdata('id_balita');
		$this->load->view('Balita/header', $data);
		$data['tampil_imunisasi'] = $this->master->tampil_imunisasi_balita($nik);
		$this->load->view('Balita/data_imunisasi', $data);
		$this->load->view('Balita/footer');
	}
	public function detail_data_imunisasi($id_balita)
	{
		$data['judul'] = 'Balita || Home';
		$this->load->view('Balita/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['lihat_imunisasi'] = $this->master->lihat_imunisasi();
		$data['detail_data_imunisasi'] = $this->master->detail_data_imunisasi($id_balita);
		$this->load->view('Balita/detail_data_imunisasi', $data);
		$this->load->view('Balita/footer');
	}
	public function data_gizi()
	{
		$data['judul'] = 'Balita || Home';
		$nik = $this->session->userdata('nik');
		$id_balita = $this->session->userdata('id_balita');
		$this->load->view('Balita/header', $data);
		$data['tampil_gizi'] = $this->master->tampil_gizi_balita($nik);
		$this->load->view('Balita/data_gizi', $data);
		$this->load->view('Balita/footer');
	}
	public function detail_data_gizi($id_balita)
	{
		$data['judul'] = 'Balita || Home';
		$this->load->view('Balita/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['tampil_gizi'] = $this->master->tampil_gizi();
		$data['detail_data_gizi'] = $this->master->detail_data_gizi($id_balita);
		$this->load->view('Balita/detail_data_gizi', $data);
		$this->load->view('Balita/footer');
	}
}