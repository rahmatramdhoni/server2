<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_lokasi extends CI_Model {
	public function tampil_detail_lokasi()
	{
		# code...
		$data=$this->db->get('t_detail_lokasi');
		return $data->result();
	}
	public function tambah_detail_lokasi($datae)
	{
		# code...
		$tambah = $this->db->insert('t_detail_lokasi',$datae);
		return $tambah;
	}
	public function update_detail_lokasi($id,$data)
	{
		# code...
		$this->db->where('id',$id);
		$update = $this->db->update('t_detail_lokasi',$data);
		return $update;
	}
	public function get_data($id)
	{
		# code...
		$this->db->where('id',$id);
		$getdata = $this->db->get('t_detail_lokasi');
		return $getdata->result();
	}
	public function delete($id)
	{
		# code...
		$this->db->where('id',$id);
		$delete = $this->db->delete('t_detail_lokasi');
		return $delete;
	}
}