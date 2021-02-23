<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
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
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	public function master_admin()
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['tampil_admin'] = $this->master->master_admin();
		$this->load->view('admin/master_admin', $data);
		$this->load->view('admin/footer');
	}
	public function tambah_admin()
	{
		$username = $this->input->post('username');
		//$password = md5($this->input->post('password'));
		$password = md5($this->input->post('password'));
		$nama_admin = $this->input->post('nama_admin');
		$telepon = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');
		$data = array('username' => $username,
						'password' => $password,
						'nama_admin' => $nama_admin,
						'telepon' => $telepon,
						'alamat' => $alamat);
		$jalan = $this->master->tambah_admin($data);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Admin Berhasil Di Tambah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/master_admin/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Admin Gagal Di Tambah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/master_admin/')."';	
				  } ,2100); 
				 </script>"; 
			}
			
	}
	public function hapus_admin($id_admin)
	{
		$jalan = $this->master->hapus_admin($id_admin);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Admin Berhasil Di Hapus',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/master_admin/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Admin Gagal Di Hapus',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/master_admin/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function data_balita()
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['tampil_balita'] = $this->master->tampil_balita();
		$this->load->view('admin/data_balita', $data);
		$this->load->view('admin/footer');
	}
	public function edit_data_balita($id_balita)
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['edit_data_balita'] = $this->master->edit_data_balita($id_balita);
		$this->load->view('admin/edit_data_balita', $data);
		$this->load->view('admin/footer');
	}
	public function tambah_balita()
	{
		$nik = $this->input->post('nik');
		$nama_balita = $this->input->post('nama_balita');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$umur_balita = $this->input->post('umur_balita');
		$agama = $this->input->post('agama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$bb_balita = $this->input->post('bb_balita');
		$tb_balita = $this->input->post('tb_balita');
		$username = $this->input->post('username');
		$telepon = $this->input->post('telepon');
		$password = '123';
		$keterangan_balita = $this->input->post('keterangan_balita');
		$data = array('nik' => $nik,
						'nama_balita' => $nama_balita,
						'nama_ayah' => $nama_ayah,
						'nama_ibu' => $nama_ibu,
						'tanggal_lahir' => $tanggal_lahir,
						'jenis_kelamin' => $jenis_kelamin,
						'agama' => $agama,
						'umur_balita' => $umur_balita,
						'bb_balita' => $bb_balita,
						'tb_balita' => $tb_balita,
						'username' => $username,
						'telepon' => $telepon,
						//'password' => md5($password),
						'password' => $password,
						'keterangan_balita' => $keterangan_balita);
		$jalan = $this->master->tambah_balita($data);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Balita Berhasil Di Tambah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_balita/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Balita Gagal Di Tambah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_balita/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function simpan_balita($id_balita)
	{
		$nik = $this->input->post('nik');
		$nama_balita = $this->input->post('nama_balita');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$umur_balita = $this->input->post('umur_balita');
		$agama = $this->input->post('agama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$bb_balita = $this->input->post('bb_balita');
		$tb_balita = $this->input->post('tb_balita');
		$telepon = $this->input->post('telepon');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pass_lama = $this->input->post('pass_lama');
		$keterangan_balita = $this->input->post('keterangan_balita');
		if($password == '')
		{
			$pass = $pass_lama;
		}else{
			$pass = $password;
		}
		$data = array('nik' => $nik,
						'nama_balita' => $nama_balita,
						'nama_ayah' => $nama_ayah,
						'nama_ibu' => $nama_ibu,
						'tanggal_lahir' => $tanggal_lahir,
						'agama' => $agama,
						'jenis_kelamin' => $jenis_kelamin,
						'umur_balita' => $umur_balita,
						'bb_balita' => $bb_balita,
						'tb_balita' => $tb_balita,
						'username' => $username,
						'password' => md5($pass),
						'telepon' => $telepon,
						'keterangan_balita' => $keterangan_balita);
		$jalan = $this->master->simpan_balita($data, $id_balita);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Balita Berhasil Di Ubah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_balita/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Balita Gagal Di Ubah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_balita/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function hapus_data_balita($id_balita)
	{
		$jalan = $this->master->hapus_data_balita($id_balita);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Balita Berhasil Di Hapus',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_balita/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Balita Gagal Di Hapus',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_balita/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function tes()
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/data_desa');
		$this->load->view('admin/footer');
	}
	public function sms_broadcase()
	{
		$data['judul'] = 'Admin || SMS Broadcase';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$this->load->view('admin/sms_broadcase', $data);
		$this->load->view('admin/footer');
	}
	public function kirim_sms()
	{
		$id_balita = $this->input->post('id_balita');
		$ket_imunisasi = $this->input->post('ket_imunisasi');
		$tanggal = date('20y-m-d');
		$isi = $this->input->post('isi');
		$jumlah = sizeof($id_balita);
		for( $i =0; $i< $jumlah; $i++){
			$databalita = $this->master->cek_balita($id_balita[$i]);
			foreach($databalita as $da){
		$telepon = $da->telepon;
		$nama_balita = $da->nama_balita;
		$nik = $da->nik;
		//$ket_imunisasi = 'INFORMASI POSYANDU UNTUK ANAK / IBU DAN IBU HAMIL';
		//$isi = "Kayganteng tolong dikondisikan";
				//$nohp = $p->nohp;
				$message = "E POSYANDU "."<b>NIK / NAMA BALITA =</b>"." ".$nik. " " .$nama_balita. " KETERANGAN : " .$ket_imunisasi."";
				// Script Kirim SMS 
                    $userkey="tnwm2a"; // user
                    $passkey="yoga1507"; // passs
                    
                    $url = "https://reguler.zenziva.net/apps/smsapi.php";
                    $curlHandle = curl_init();
                    curl_setopt($curlHandle, CURLOPT_URL, $url);
                    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
                    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
                    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
                    curl_setopt($curlHandle, CURLOPT_POST, 1);
                    $results = curl_exec($curlHandle);
                    curl_close($curlHandle);
					//echo "<script>alert('$results'); </script>";
					echo "
					<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
					<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
					<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
					 <script type='text/javascript'>
					  setTimeout(function () {  
					   swal({
						title: 'BROADCAST BERHASIL DI KIRIM',
						type: 'success',
						timer: 4000,
						showConfirmButton: false
					   });  
					  },10); 
					  window.setTimeout(function(){ 
					  window.location.href='".base_url('/admin/sms_broadcase/')."';	
					  } ,2100); 
					 </script>"; 
					 // var_dump($message);
		}
		}
	}
	public function master_imunisasi()
	{
		$data['judul'] = 'Admin || Master Imunisasi';
		$this->load->view('admin/header', $data);
		$data['tampil_master_imunisasi'] = $this->master->tampil_master_imunisasi();
		$this->load->view('admin/master_imunisasi', $data);
		$this->load->view('admin/footer');
	}
	public function tambah_master_imunisasi()
	{
		$imunisasi = $this->input->post('imunisasi');
		$keterangan_imunisasi = $this->input->post('keterangan_imunisasi');
		$data = array('imunisasi' => $imunisasi,
						'keterangan_imunisasi' => $keterangan_imunisasi);
		$jalan = $this->master->tambah_master_imunisasi($data);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Master Imunisasi Berhasil Di Tambah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/master_imunisasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Master Imunisasi Gagal Di Tambah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/master_imunisasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function data_imunisasi()
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['lihat_imunisasi'] = $this->master->lihat_imunisasi();
		$data['tampil_imunisasi'] = $this->master->tampil_imunisasi();
		$this->load->view('admin/data_imunisasi', $data);
		$this->load->view('admin/footer');
	}
	public function edit_data_imunisasi($id_imunisasi)
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['lihat_imunisasi'] = $this->master->lihat_imunisasi();
		$data['edit_data_imunisasi'] = $this->master->edit_data_imunisasi($id_imunisasi);
		$this->load->view('admin/edit_data_imunisasi', $data);
		$this->load->view('admin/footer');
	}
	public function detail_data_imunisasi($id_balita)
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['lihat_imunisasi'] = $this->master->lihat_imunisasi();
		$data['detail_data_imunisasi'] = $this->master->detail_data_imunisasi($id_balita);
		$this->load->view('admin/detail_data_imunisasi', $data);
		$this->load->view('admin/footer');
	}
	public function sms_data_imunisasi($id_imunisasi)
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['lihat_imunisasi'] = $this->master->lihat_imunisasi();
		$data['edit_data_imunisasi'] = $this->master->edit_data_imunisasi($id_imunisasi);
		$this->load->view('admin/sms_data_imunisasi', $data);
		$this->load->view('admin/footer');
	}
	public function tambah_imunisasi()
	{
		$id_balita = $this->input->post('id_balita');
		$id_master_imunisasi = $this->input->post('id_master_imunisasi');
		$bb_imunisasi = $this->input->post('bb_imunisasi');
		$vaksin = $this->input->post('vaksin');
		$tb_imunisasi = $this->input->post('tb_imunisasi');
		$tgl_imunisasi = $this->input->post('tgl_imunisasi');
		$ket_imunisasi = $this->input->post('ket_imunisasi');
		$data = array('id_balita' => $id_balita,
						'id_master_imunisasi' => $id_master_imunisasi,
						'vaksin' => $vaksin,
						'bb_imunisasi' => $bb_imunisasi,
						'tb_imunisasi' => $tb_imunisasi,
						'tgl_imunisasi' => $tgl_imunisasi,
						'ket_imunisasi' => $ket_imunisasi);
		$jalan = $this->master->tambah_imunisasi($data);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Imunisasi Berhasil Di Tambah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_imunisasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Imunisasi Gagal Di Tambah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_imunisasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function simpan_imunisasi($id_imunisasi)
	{
		$id_master_imunisasi = $this->input->post('id_master_imunisasi');
		$bb_imunisasi = $this->input->post('bb_imunisasi');
		$vaksin = $this->input->post('vaksin');
		$tb_imunisasi = $this->input->post('tb_imunisasi');
		$tgl_imunisasi = $this->input->post('tgl_imunisasi');
		$ket_imunisasi = $this->input->post('ket_imunisasi');
		$data = array('id_master_imunisasi' => $id_master_imunisasi,
						'vaksin' => $vaksin,
						'bb_imunisasi' => $bb_imunisasi,
						'tb_imunisasi' => $tb_imunisasi,
						'tgl_imunisasi' => $tgl_imunisasi,
						'ket_imunisasi' => $ket_imunisasi);
		$jalan = $this->master->simpan_imunisasi($data, $id_imunisasi);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Imunisasi Berhasil Di Ubah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_imunisasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Imunisasi Gagal Di Ubah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_imunisasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function kirim_sms_imunisasi()
	{
		$telepon = $this->input->post('telepon');
		$nik = $this->input->post('nik');
		$nama_balita = $this->input->post('nama_balita');
		$imunisasi = $this->input->post('imunisasi');
		$vaksin = $this->input->post('vaksin');
		$ket_imunisasi = $this->input->post('ket_imunisasi');
		
		$message = "E POSYANDU "."<b>NIK / NAMA BALITA =</b>"." ".$nik. " " .$nama_balita. " "."<b>IMUNISASI</b>"." ".$imunisasi. "<BR/>".$vaksin.""."<b>Ket :</b>"." " .$ket_imunisasi."";
				// Script Kirim SMS 
                    $userkey="tnwm2a"; // user
                    $passkey="yoga1507"; // passs
                    
                    $url = "https://reguler.zenziva.net/apps/smsapi.php";
                    $curlHandle = curl_init();
                    curl_setopt($curlHandle, CURLOPT_URL, $url);
                    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
                    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
                    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
                    curl_setopt($curlHandle, CURLOPT_POST, 1);
                    $results = curl_exec($curlHandle);
                    curl_close($curlHandle);
					echo "<script>alert('SMS BERHASIL DI KIRIM ".$telepon."');window.location.href='".base_url("/admin/data_imunisasi")."' </script>";
	}
	public function hapus_data_imunisasi($id_imunisasi)
	{
		$jalan = $this->master->hapus_data_imunisasi($id_imunisasi);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Imunisasi Berhasil Di Hapus',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_imunisasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Imunisasi Gagal Di Hapus',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_imunisasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function data_gizi()
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['tampil_gizi'] = $this->master->tampil_gizi();
		$this->load->view('admin/data_gizi', $data);
		$this->load->view('admin/footer');
	}
	public function edit_data_gizi($id_gizi)
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['tampil_gizi'] = $this->master->tampil_gizi();
		$data['edit_data_gizi'] = $this->master->edit_data_gizi($id_gizi);
		$this->load->view('admin/edit_data_gizi', $data);
		$this->load->view('admin/footer');
	}
	public function detail_data_gizi($id_balita)
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['tampil_gizi'] = $this->master->tampil_gizi();
		$data['detail_data_gizi'] = $this->master->detail_data_gizi($id_balita);
		$this->load->view('admin/detail_data_gizi', $data);
		$this->load->view('admin/footer');
	}
	public function sms_data_gizi($id_gizi)
	{
		$data['judul'] = 'Admin || Home';
		$this->load->view('admin/header', $data);
		$data['lihat_balita'] = $this->master->lihat_balita();
		$data['tampil_gizi'] = $this->master->tampil_gizi();
		$data['sms_data_gizi'] = $this->master->detail_data_gizi($id_gizi);
		$this->load->view('admin/sms_data_gizi', $data);
		$this->load->view('admin/footer');
	}
	public function kirim_sms_gizi()
	{
		$telepon = $this->input->post('telepon');
		$nik = $this->input->post('nik');
		$nama_balita = $this->input->post('nama_balita');
		$gizi = $this->input->post('gizi');
		$ket_gizi= $this->input->post('ket_gizi');
		
		$message = "E POSYANDU "."<b>NIK / NAMA BALITA =</b>"." ".$nik. " " .$nama_balita. " "."<b>GIZI</b>"." ".$gizi. "<BR/>"."<b>Ket :</b>"." " .$ket_gizi."";
				// Script Kirim SMS 
                    $userkey="tnwm2a"; // user
                    $passkey="yoga1507"; // passs
                    
                    $url = "https://reguler.zenziva.net/apps/smsapi.php";
                    $curlHandle = curl_init();
                    curl_setopt($curlHandle, CURLOPT_URL, $url);
                    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
                    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
                    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
                    curl_setopt($curlHandle, CURLOPT_POST, 1);
                    $results = curl_exec($curlHandle);
                    curl_close($curlHandle);
					echo "<script>alert('SMS BERHASIL DI KIRIM ".$telepon."');window.location.href='".base_url("/admin/data_gizi")."' </script>";
	}
	public function tambah_gizi()
	{
		$id_balita = $this->input->post('id_balita');
		$gizi = $this->input->post('gizi');
		$bb_gizi = $this->input->post('bb_gizi');
		$tb_gizi = $this->input->post('tb_gizi');
		$tgl_gizi = $this->input->post('tgl_gizi');
		$ket_gizi = $this->input->post('ket_gizi');
		$data = array('id_balita' => $id_balita,
						'gizi' => $gizi,
						'tb_gizi' => $tb_gizi,
						'bb_gizi' => $bb_gizi,
						'tgl_gizi' => $tgl_gizi,
						'ket_gizi' => $ket_gizi);
		$jalan = $this->master->tambah_gizi($data);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Gizi Berhasil Di Tambah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_gizi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Gizi Gagal Di Tambah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_gizi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function simpan_gizi($id_gizi)
	{
		$gizi = $this->input->post('gizi');
		$bb_gizi = $this->input->post('bb_gizi');
		$tb_gizi = $this->input->post('tb_gizi');
		$tgl_gizi = $this->input->post('tgl_gizi');
		$ket_gizi = $this->input->post('ket_gizi');
		$data = array('gizi' => $gizi,
						'tb_gizi' => $tb_gizi,
						'bb_gizi' => $bb_gizi,
						'tgl_gizi' => $tgl_gizi,
						'ket_gizi' => $ket_gizi);
		$jalan = $this->master->simpan_gizi($data, $id_gizi);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Gizi Berhasil Di Ubah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_gizi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Gizi Gagal Di Ubah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_gizi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function hapus_data_gizi($id_gizi)
	{
		$jalan = $this->master->hapus_data_gizi($id_gizi);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Gizi Berhasil Di Hapus',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_gizi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Gizi Gagal Di Hapus',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_gizi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function master_ibuhamil()
	{
		$data['judul'] = 'Admin || Master Ibu Hamil';
		$this->load->view('admin/header', $data);
		$data['tampil_master_ibuhamil'] = $this->master->tampil_master_ibuhamil();
		$this->load->view('admin/master_ibuhamil', $data);
		$this->load->view('admin/footer');
	}
	public function tambah_master_ibuhamil()
	{
		$nik = $this->input->post('nik');
		$nama_ibu = $this->input->post('nama_ibu');
		$nama_ayah = $this->input->post('nama_ayah');
		$awal_hamil = $this->input->post('awal_hamil');
		$data = array('nik' => $nik,
						'nama_ibu' => $nama_ibu,
						'nama_ayah' => $nama_ayah,
						'awal_hamil' => $awal_hamil);
		$jalan = $this->master->tambah_master_ibuhamil($data);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Master Ibu Hamil ".$nama_ibu." Berhasil Ditambah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/master_ibuhamil/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Master Ibu Hamil ".$nama_ibu." Gagal Ditambah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/master_ibuhamil/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function data_ibuhamil()
	{
		$data['judul'] = 'Admin || Data Ibu Hamil';
		$this->load->view('admin/header', $data);
		$data['lihat_ibuhamil'] = $this->master->lihat_ibuhamil();
		$data['tampil_ibuhamil'] = $this->master->tampil_ibuhamil();
		$this->load->view('admin/data_ibuhamil', $data);
		$this->load->view('admin/footer');
	}
	public function edit_data_ibuhamil($id_ibuhamil)
	{
		$data['judul'] = 'Admin || Data Ibu Hamil';
		$this->load->view('admin/header', $data);
		$data['lihat_ibuhamil'] = $this->master->lihat_ibuhamil();
		$data['edit_data_ibuhamil'] = $this->master->edit_data_ibuhamil($id_ibuhamil);
		$this->load->view('admin/edit_data_ibuhamil', $data);
		$this->load->view('admin/footer');
	}
	public function tambah_ibuhamil()
	{
		$id_master_ibuhamil = $this->input->post('id_master_ibuhamil');
		$nama_ibu = $this->input->post('nama_ibu');
		$kegiatan = $this->input->post('kegiatan');
		$tgl_kegiatan = $this->input->post('tgl_kegiatan');
		$keterangan = $this->input->post('keterangan');
		$umur_kehamilan = $this->input->post('umur_kehamilan');
		$data = array('id_master_ibuhamil' => $id_master_ibuhamil,
						'kegiatan' => $kegiatan,
						'tgl_kegiatan' => $tgl_kegiatan,
						'keterangan' => $keterangan,
						'umur_kehamilan' => $umur_kehamilan);
		$jalan = $this->master->tambah_ibuhamil($data);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Ibu Hamil ".$nama_ibu." Berhasil Ditambah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_ibuhamil/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Ibu Hamil ".$nama_ibu." Gagal Ditambah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_ibuhamil/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function simpan_ibuhamili($id_ibuhamil)
	{
		$id_master_ibuhamil = $this->input->post('id_master_ibuhamil');
		$nama_ibu = $this->input->post('nama_ibu');
		$kegiatan = $this->input->post('kegiatan');
		$tgl_kegiatan = $this->input->post('tgl_kegiatan');
		$keterangan = $this->input->post('keterangan');
		$umur_kehamilan = $this->input->post('umur_kehamilan');
		$data = array('kegiatan' => $kegiatan,
						'tgl_kegiatan' => $tgl_kegiatan,
						'keterangan' => $keterangan,
						'umur_kehamilan' => $umur_kehamilan);
		$jalan = $this->master->simpan_ibuhamili($data, $id_ibuhamil);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Ibu Hamil ".$nama_ibu." Berhasil Ubah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_ibuhamil/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Ibu Hamil ".$nama_ibu." Gagal Ubah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_ibuhamil/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function hapus_data_ibuhamil($id_ibuhamil)
	{
		$jalan = $this->master->hapus_data_ibuhamil($id_ibuhamil);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Ibu Hamil Berhasil Hapus',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_ibuhamil/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Ibu Hamil Gagal Hapus',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_ibuhamil/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function data_informasi()
	{
		$data['judul'] = 'Admin || Data Informasi';
		$this->load->view('admin/header', $data);
		$data['tampil_informasi'] = $this->master->tampil_informasi();
		$this->load->view('admin/data_informasi', $data);
		$this->load->view('admin/footer');
	}
	public function edit_informasi($id_informasi)
	{
		$data['judul'] = 'Admin || Edit Informasi';
		$this->load->view('admin/header', $data);
		$data['edit_informasi'] = $this->master->edit_informasi($id_informasi);
		$this->load->view('admin/edit_informasi', $data);
		$this->load->view('admin/footer');
	}
	public function tambah_informasi()
	{
		$judul_informasi = strtoupper($this->input->post('judul_informasi'));
		$tgl_informasi = $this->input->post('tgl_informasi');
		$isi = $this->input->post('isi');
		$data = array('judul_informasi' => $judul_informasi,
						'tgl_informasi' => $tgl_informasi,
						'isi' => $isi);
		$jalan = $this->master->tambah_informasi($data);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Informasi Berhasil Tambah',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_informasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Informasi Gagal Tambah',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_informasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function simpan_informasi($id_informasi)
	{
		$judul_informasi = strtoupper($this->input->post('judul_informasi'));
		$tgl_informasi = $this->input->post('tgl_informasi');
		$isi = $this->input->post('isi');
		$data = array('judul_informasi' => $judul_informasi,
						'tgl_informasi' => $tgl_informasi,
						'isi' => $isi);
		$jalan = $this->master->simpan_informasi($data, $id_informasi);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Informasi Berhasil Simpan',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_informasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Informasi Gagal Simpan',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_informasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function hapus_informasi($id_informasi)
	{
		$jalan = $this->master->hapus_informasi($id_informasi);
		if($jalan){
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Informasi Berhasil Hapus',
					type: 'success',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_informasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
			else{
				echo "
				<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
				 <script type='text/javascript'>
				  setTimeout(function () {  
				   swal({
					title: 'Data Informasi Gagal Hapus',
					type: 'error',
					timer: 4000,
					showConfirmButton: false
				   });  
				  },10); 
				  window.setTimeout(function(){ 
				  window.location.href='".base_url('/admin/data_informasi/')."';	
				  } ,2100); 
				 </script>"; 
			}
	}
	public function laporan()
	{
		$data['judul'] = 'Admin || Data Laporan';
		$this->load->view('admin/header', $data);
		$data['lihat_ibuhamil'] = $this->master->lihat_ibuhamil();
		$data['lihat_balita'] = $this->master->lihat_balita();
		$this->load->view('admin/laporan', $data);
		$this->load->view('admin/footer');
	}
	public function laporan_data_imunisasi()
	{
		$data['judul'] = 'Admin || Data Laporan Imunisasi';
		$this->load->view('admin/header', $data);
		$data['lihat_ibuhamil'] = $this->master->lihat_ibuhamil();
		$data['lihat_balita'] = $this->master->lihat_balita();
		$id_balita = $this->input->post('id_balita');
		$data['detail_data_imunisasi'] = $this->master->laporan_data_imunisasi($id_balita);
		$this->load->view('admin/laporan_data_imunisasi', $data);
		$this->load->view('admin/footer');
	}
	public function laporan_data_gizi()
	{
		$data['judul'] = 'Admin || Data Laporan Gizi';
		$this->load->view('admin/header', $data);
		$data['lihat_ibuhamil'] = $this->master->lihat_ibuhamil();
		$data['lihat_balita'] = $this->master->lihat_balita();
		$id_balita = $this->input->post('id_balita');
		$data['detail_data_gizi'] = $this->master->laporan_data_gizi($id_balita);
		$this->load->view('admin/laporan_data_gizi', $data);
		$this->load->view('admin/footer');
	}
}