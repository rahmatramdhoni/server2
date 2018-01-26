<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi extends CI_Model {
	public function tampil_lokasi()
	{
		# code...
		$data=$this->db->get('t_lokasi');
		return $data->result();
	}
	public function tambah_lokasi($datae)
	{
		# code...
		$tambah = $this->db->insert('t_lokasi',$datae);
		return $tambah;
	}
	public function update_lokasi($id,$data)
	{
		# code...
		$this->db->where('id_lokasi',$id);
		$update = $this->db->update('t_lokasi',$data);
		return $update;
	}
	public function get_data($id)
	{
		# code...
		$this->db->where('id_lokasi',$id);
		$getdata = $this->db->get('t_lokasi');
		return $getdata->result();
	}
	public function delete($id)
	{
		# code...
		$this->db->where('id_lokasi',$id);
		$delete = $this->db->delete('t_lokasi');
		return $delete;
	}
	
}