<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("mod_device");
		$this->load->model("M_login");
	}

	public function index(){
		$this->load->view("apps/login");
	}
	public function login()
	{
		// $this->mod_device->load_dataset();
		# code...
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);

		
		$cek = $this->M_login->cek_login("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				
				'username' => $username,
				
				);
 			
			$this->session->set_userdata($data_session);
 
			redirect('Apps/admin');
 
		}else{
			$this->session->set_flashdata('msg','Username dan password salah !');
			redirect('Apps');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Apps');
	}
	public function admin()
	{
		$data['judul'] = 'Home';
		$data['subjudul'] = 'Tampilan Awal Sistem';
		$data['content'] = 'apps/test';
		$this->load->view('Apps/admin',$data);
		
	}
	public function test()
	{
		# code...
		$data['judul'] = 'Home';
		$data['subjudul'] = 'Tampilan Awal Sistem';
		$data['content'] = 'apps/test';
		$this->load->view('Apps/admin',$data);
	}
	public function lampu()
	{
		# code...
		$data['judul'] = 'Monitoring Lampu';
		$data['subjudul'] = 'Tabel Monitoring Lampu';
		$data['content'] = 'apps/monitoring_l';
		$this->load->model('m_lampu');
		$data['isi1'] = $this->m_lampu->tampil_lampu1();
		$data['isi2'] = $this->m_lampu->tampil_lampu2();
		//$data['isi3'] = $this->db->query("SELECT * FROM t_lampu WHERE lokasi='Lantai 1'");
		//$data['test'] = $this->db->query("SELECT * FROM t_lampu WHERE lokasi='Lantai 1'");
		
		$this->load->view('Apps/admin',$data);
	}
	public function send()
	{
		# code...
		# code...
		$data['judul'] = 'Monitoring Lampu';
		$data['subjudul'] = 'Tabel Monitoring Lampu';
		$data['content'] = 'apps/nilaijadi';
		
		$data['test'] = $this->db->get('t_lampu');
		
		$this->load->view('Apps/admin',$data);
	}
	public function on($id)
	{
		# code...
		$this->load->model('m_lampu');
		$u = $this->m_lampu->on($id);
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function off($id)
	{
		# code...
		$this->load->model('m_lampu');
		$u = $this->m_lampu->off($id);
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function on_lantai1()
	{
		# code...
		
		$this->load->model('m_lampu');
		$u = $this->m_lampu->onlantai1();
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function off_lantai1()
	{
		# code...
		$this->load->model('m_lampu');
		$u = $this->m_lampu->offlantai1();
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function on_lantai2()
	{
		# code...
		$this->load->model('m_lampu');
		$u = $this->m_lampu->onlantai2();
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function off_lantai2()
	{
		# code...
		$this->load->model('m_lampu');
		$u = $this->m_lampu->offlantai2();
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function sensor()
	{
		# code...
		$data['judul'] = 'Monitoring Sensor';
		$data['subjudul'] = 'Tabel Monitoring Sensor';
		$data['content'] = 'apps/monitoring_s';
		$this->load->model('sensor');
		$data['isi1'] = $this->sensor->sensor1();
		$data['isi2'] = $this->sensor->sensor2();
		$this->load->view('Apps/admin',$data);
	}
	public function test_restful(){
		header("content-type:json");
		echo json_encode(array("data_json" => $this->mod_device->load_dataset()));
	}

	public function status_lampu(){
		$data = $this->mod_device->status_lampu();
		echo "#";
		foreach ($data as $rows) {
			echo $rows->state;
		}
		echo "^";

	}
	public function t_jadwal()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Penjadwalan Lampu';
		$data['content'] = 'apps/tampil_jadwal';
		$this->load->model('m_jadwal');
		$data['penjadwalan'] = $this->m_jadwal->tampil_jadwal();
		$this->load->view('Apps/admin',$data);
	}
	public function t_agent()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Jenis Agent';
		$data['content'] = 'apps/tampil_agent';
		$this->load->model('m_agent');
		$data['penjadwalan'] = $this->m_agent->tampil_agent();
		$this->load->view('Apps/admin',$data);
	}
	public function t_mode()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Mode';
		$data['content'] = 'apps/tampil_mode';
		$this->load->model('m_mode');
		$data['penjadwalan'] = $this->m_mode->tampil_mode();
		$this->load->view('Apps/admin',$data);
	}
	public function t_lokasi()
	{
		# code...
		$data['judul'] = 'Lokasi';
		$data['subjudul'] = 'Tabel Lokasi Lampu';
		$data['content'] = 'apps/tampil_lokasi';
		$this->load->model('m_lokasi');
		$data['penjadwalan'] = $this->m_lokasi->tampil_lokasi();
		$this->load->view('Apps/admin',$data);
	}
	public function t_detail_lokasi()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Detail Lokasi';
		$data['content'] = 'apps/tampil_detail_lokasi';
		$this->load->model('m_detail_lokasi');
		$data['penjadwalan'] = $this->m_detail_lokasi->tampil_detail_lokasi();
		$this->load->view('Apps/admin',$data);
	}
	public function t_detail_jadwal()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Detail Jadwal';
		$data['content'] = 'apps/tampil_detail_jadwal';
		$this->load->model('m_detail_jadwal');
		$data['penjadwalan'] = $this->m_detail_jadwal->tampil_detail_jadwal();
		$this->load->view('Apps/admin',$data);
	}
	public function tambah_jadwal()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Tambah Jadwal';
		$data['content'] = 'apps/tambah_jadwal';
		
		$this->load->view('Apps/admin',$data);
	}
	public function tambah_detail_jadwal()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Tambah Detail Jadwal';
		$data['content'] = 'apps/tambah_detail_jadwal';
		
		$this->load->view('Apps/admin',$data);
	}
	public function tambah_lokasi()
	{
		# code...
		$data['judul'] = 'Lokasi';
		$data['subjudul'] = 'Tabel Tambah Lokasi';
		$data['content'] = 'apps/tambah_lokasi';
		
		$this->load->view('Apps/admin',$data);
	}
	public function tambah_detail_lokasi()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Detail Lokasi';
		$data['content'] = 'apps/tambah_detail_lokasi';
		
		$this->load->view('Apps/admin',$data);
	}
	public function tambah_agent()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Tambah Agent';
		$data['content'] = 'apps/tambah_agent';
		
		$this->load->view('Apps/admin',$data);
	}
	public function tambah_mode()
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Tabel Tambah Mode';
		$data['content'] = 'apps/tambah_mode';
		
		$this->load->view('Apps/admin',$data);
	}
	public function fungsi_tambah_jadwal()
	{
		# code...\
		$datae = array('nama_jadwal' => $this->input->post('a'), 
			'waktu_awal' => $this->input->post('b'), 
			'waktu_akhir' => $this->input->post('c'), 
			'senin' => $this->input->post('d'), 
			'selasa' => $this->input->post('e'), 
			'rabu' => $this->input->post('f'), 
			'kamis' => $this->input->post('g'), 
			'jumat' => $this->input->post('h'), 
			'sabtu' => $this->input->post('i'),
			'minggu' => $this->input->post('j'),  

			);
		$this->load->model('m_jadwal');
		$tambah = $this->m_jadwal->tambah_jadwal($datae);
		if ($tambah) {
			# code...
			redirect('Apps/t_jadwal');
		}else{
			redirect('Apps/tambah_jadwal');
		}
	}
	public function fungsi_tambah_detail_jadwal()
	{
		# code...\
		$datae = array('status' => $this->input->post('a'), 
			);
		$this->load->model('m_detail_jadwal');
		$tambah = $this->m_detail_jadwal->tambah_detail_jadwal($datae);
		if ($tambah) {
			# code...
			redirect('Apps/t_detail_jadwal');
		}else{
			redirect('Apps/tambah_detail_jadwal');
		}
	}
	public function fungsi_tambah_lokasi()
	{
		# code...\

		$datae = array('nama_lokasi' => $this->input->post('a'), 
			);
		$this->load->model('m_lokasi');
		$tambah = $this->m_lokasi->tambah_lokasi($datae);
		if ($tambah) {
			# code...
			redirect('Apps/t_lokasi');
		}else{
			redirect('Apps/tambah_lokasi');
		}
	}
	public function fungsi_tambah_detail_lokasi()
	{
		# code...\

		$datae = array('status' => $this->input->post('a'), 
			);
		$this->load->model('m_detail_lokasi');
		$tambah = $this->m_detail_lokasi->tambah_detail_lokasi($datae);
		if ($tambah) {
			# code...
			redirect('Apps/t_detail_lokasi');
		}else{
			redirect('Apps/tambah_detail_lokasi');
		}
	}
	public function fungsi_tambah_agent()
	{
		# code...\

		$datae = array('jenis_agent' => $this->input->post('a'), 
			);
		$this->load->model('m_agent');
		$tambah = $this->m_agent->tambah_agent($datae);
		if ($tambah) {
			# code...
			redirect('Apps/t_agent');
		}else{
			redirect('Apps/tambah_agent');
		}
	}
	public function fungsi_tambah_mode()
	{
		# code...\

		$datae = array('mode' => $this->input->post('a'), 
			);
		$this->load->model('m_mode');
		$tambah = $this->m_agent->tambah_mode($datae);
		if ($tambah) {
			# code...
			redirect('Apps/t_mode');
		}else{
			redirect('Apps/tambah_mode');
		}
	}
	public function update_jadwal($id)
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Update Tambah Jadwal';
		$data['content'] = 'apps/update_jadwal';
		$this->load->model('m_jadwal');
		$data['getdata'] = $this->m_jadwal->get_data($id);
		foreach ($data['getdata'] as $key) {
			# code...
		$data['isi']= array('nama_jadwal' => $key->nama_jadwal,
		'id_jadwal' => $key->id_jadwal,
		'waktu_awal' => $key->waktu_awal,
		'waktu_akhir' => $key->waktu_akhir,);


		}
		$this->load->view('Apps/admin',$data);
	}
	public function update_detail_jadwal($id)
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Update Detail Jadwal';
		$data['content'] = 'apps/update_detail_jadwal';
		$this->load->model('m_detail_jadwal');
		$data['getdata'] = $this->m_detail_jadwal->get_data($id);
		foreach ($data['getdata'] as $key) {
			# code...
		$data['isi']= array('status' => $key->status,
			);
		}
		$this->load->view('Apps/admin',$data);
	}
	public function update_lokasi($id)
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Update Tambah Lokasi';
		$data['content'] = 'apps/update_lokasi';
		$this->load->model('m_lokasi');
		$data['getdata'] = $this->m_lokasi->get_data($id);
		foreach ($data['getdata'] as $key) {
			# code...
		$data['isi']= array('nama_lokasi' => $key->nama_lokasi,
		'id_lokasi' => $key->id_lokasi,
		'nama_lokasi' => $key->nama_lokasi,);
		

		}
		$this->load->view('Apps/admin',$data);
	}
	public function update_detail_lokasi($id)
	{
		# code...
		$data['judul'] = 'Penjadwalan';
		$data['subjudul'] = 'Update Detail Lokasi';
		$data['content'] = 'apps/update_detail_lokasi';
		$this->load->model('m_detail_lokasi');
		$data['getdata'] = $this->m_detail_lokasi->get_data($id);
		foreach ($data['getdata'] as $key) {
			# code...
		$data['isi']= array('status' => $key->status,
		'id_lokasi' => $key->id_lokasi,
		'id_lampu' => $key->id_lampu,
		'status' => $key->status,);
		

		}
		$this->load->view('Apps/admin',$data);
	}
	public function update_agent($id)
	{
		# code...
		$data['judul'] = 'Agent';
		$data['subjudul'] = 'Update Tambah Agent';
		$data['content'] = 'apps/update_agent';
		$this->load->model('m_agent');
		$data['getdata'] = $this->m_agent->get_data($id);
		foreach ($data['getdata'] as $key) {
			# code...
		$data['isi']= array('jenis_agent' => $key->jenis_agent,
		'id' => $key->id,
		'jenis_agent' => $key->jenis_agent,);
		

		}
		$this->load->view('Apps/admin',$data);
	}
	public function update_mode($id)
	{
		# code...
		$data['judul'] = 'Mode';
		$data['subjudul'] = 'Update Tambah Mode';
		$data['content'] = 'apps/update_mode';
		$this->load->model('m_mode');
		$data['getdata'] = $this->m_mode->get_data($id);
		foreach ($data['getdata'] as $key) {
			# code...
		$data['isi']= array('mode' => $key->mode,
		'id' => $key->id,
		'mode' => $key->mode,);
		

		}
		$this->load->view('Apps/admin',$data);
	}
	public function fungsi_update_jadwal($id)
	{
		# code...
		$data = array('nama_jadwal' => $this->input->post('a'), 
			'waktu_awal' => $this->input->post('b'), 
			'waktu_akhir' => $this->input->post('c'), 
			'senin' => $this->input->post('d'), 
			'selasa' => $this->input->post('e'), 
			'rabu' => $this->input->post('f'), 
			'kamis' => $this->input->post('g'), 
			'jumat' => $this->input->post('h'), 
			'sabtu' => $this->input->post('i'),
			'minggu' => $this->input->post('j'),  

			);
		$this->load->model('m_jadwal');
		$update = $this->m_jadwal->update_jadwal($id,$data);
		if ($update) {
			# code...
			redirect('Apps/t_jadwal');
		}else{
			redirect('Apps/update_jadwal');
		}

	}
	public function fungsi_update_detail_jadwal($id)
	{
		# code...
		$data = array('status' => $this->input->post('a'), 
			);
		$this->load->model('m_detail_jadwal');
		$update = $this->m_detail_jadwal->update_detail_jadwal($id,$data);
		if ($update) {
			# code...
			redirect('Apps/t_detail_jadwal');
		}else{
			redirect('Apps/update_detail_jadwal');
		}

	}
	public function fungsi_update_agent($id)
	{
		# code...
		$data = array('jenis_agent' => $this->input->post('a'), 
			
			);
		$this->load->model('m_agent');
		$update = $this->m_agent->update_agent($id,$data);
		if ($update) {
			# code...
			redirect('Apps/t_agent');
		}else{
			redirect('Apps/update_agent');
		}

	}
	public function fungsi_update_lokasi($id)
	{
		# code...
		$data = array('nama_lokasi' => $this->input->post('a'), 
			
			);
		$this->load->model('m_lokasi');
		$update = $this->m_lokasi->update_lokasi($id,$data);
		if ($update) {
			# code...
			redirect('Apps/t_lokasi');
		}else{
			redirect('Apps/update_lokasi');
		}

	}
	public function fungsi_update_detail_lokasi($id)
	{
		# code...
		$data = array('status' => $this->input->post('a'), 
			
			);
		$this->load->model('m_detail_lokasi');
		$update = $this->m_detail_lokasi->update_detail_lokasi($id,$data);
		if ($update) {
			# code...
			redirect('Apps/t_detail_lokasi');
		}else{
			redirect('Apps/update_detail_lokasi');
		}

	}
	public function fungsi_update_mode($id)
	{
		# code...
		$data = array('mode' => $this->input->post('a'), 
			
			);
		$this->load->model('m_mode');
		$update = $this->m_agent->update_mode($id,$data);
		if ($update) {
			# code...
			redirect('Apps/t_mode');
		}else{
			redirect('Apps/update_mode');
		}

	}
	public function delete_lokasi($id)
	{
		# code...
		$this->load->model('m_lokasi');
		$delete = $this->m_lokasi->delete($id);
		if ($delete) {
			# code...
			redirect('Apps/t_lokasi');
		} else {
			# code...
			redirect('Apps/t_lokasi');

		}
	}
	public function delete_detail_lokasi($id)
	{
		# code...
		$this->load->model('m_detail_lokasi');
		$delete = $this->m_detail_lokasi->delete($id);
		if ($delete) {
			# code...
			redirect('Apps/t_detail_lokasi');
		} else {
			# code...
			redirect('Apps/t_detail_lokasi');

		}
	}
	public function delete_agent($id)
	{
		# code...
		$this->load->model('m_agent');
		$delete = $this->m_agent->delete($id);
		if ($delete) {
			# code...
			redirect('Apps/t_agent');
		} else {
			# code...
			redirect('Apps/t_agent');

		}
	}
	public function delete_mode($id)
	{
		# code...
		$this->load->model('m_mode');
		$delete = $this->m_mode->delete($id);
		if ($delete) {
			# code...
			redirect('Apps/t_mode');
		} else {
			# code...
			redirect('Apps/t_mode');

		}
	}
	public function delete_jadwal($id)
	{
		# code...
		$this->load->model('m_jadwal');
		$delete = $this->m_jadwal->delete($id);
		if ($delete) {
			# code...
			redirect('Apps/t_jadwal');
		} else {
			# code...
			redirect('Apps/t_jadwal');

		}
	}
	public function delete_detail_jadwal($id)
	{
		# code...
		$this->load->model('m_detail_jadwal');
		$delete = $this->m_detail_jadwal->delete($id);
		if ($delete) {
			# code...
			redirect('Apps/t_detail_jadwal');
		} else {
			# code...
			redirect('Apps/t_detail_jadwal');

		}
	}
}
	