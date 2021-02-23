<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('master'); //meload master model	
		date_default_timezone_set("Asia/Jakarta");// set timezone jekardah
		// if($this->session->userdata('id_siswa')==null){
			// redirect(base_url());
		// }
		//$this->load->library('googlemaps');
		
	}
	public function index()
	{
		$this->load->view('login/form_login');
	}
	public function login_balita()
	{
		$this->load->view('login/login_balita');
	}
	public function loginadmin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$md5 = md5($password);
		$data = array('username' => $username,
						'password' => $md5);
		$jalan = $this->master->loginadmin($data);
		if($jalan->num_rows() > 0)
		{
			$data['akun'] = $this->master->dataloginadmin($username);
			foreach($data['akun'] as $akun){
				//session_start();
				$sesi['nama'] = $akun->nama_admin;
				$sesi['username'] = $username;
				$sesi['id_admin'] = $akun->id_admin;
				$this->session->set_userdata($sesi);
				//var_dump($akun->bagian);
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Login Sukses',
				text: '	Aplikasi Ke E Posyandu',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('admin/index')."';	
			  } ,2100); 
			 </script>";
			}
		} else {
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Login Gagal Ke E Posyandu',
				text: 'Periksa Username dan Password Anda Kembali',
				type: 'error',
				timer: 10000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('app/index')."';	
			  } ,2100); 
			 </script>";
		}
	}
	public function loginbalita()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$md5 = md5($password);
		$data = array('username' => $username,
						'password' => $password);
		$jalan = $this->master->loginbalita($data);
		if($jalan->num_rows() > 0)
		{
			$data['akun'] = $this->master->dataloginbalita($username);
			foreach($data['akun'] as $akun){
				//session_start();
				$sesi['nama'] = $akun->nama_balita;
				$sesi['nik'] = $akun->nik;
				$sesi['id_balita'] = $akun->id_balita;
				$this->session->set_userdata($sesi);
				//var_dump($akun->bagian);
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Sukses Login Di Aplikasi E Posyandu',
				text: '	Aplikasi Ke E Posyandu',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('Balita/index')."';	
			  } ,2100); 
			 </script>";
			}
		} else {
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Login Gagal Ke E Posyandu',
				text: 'Periksa Username dan Password Anda Kembali',
				type: 'error',
				timer: 10000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('app/login_balita')."';	
			  } ,2100); 
			 </script>";
		}
	}
    public function logout()
	{
		$this->session->unset_userdata('username');
		session_destroy();
		echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Admin Berhasil Keluar !',
				text: 'APLIKASI E POSYANDU',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('app/index')."';	
			  } ,2100); 
			 </script>";
	}
	
}
