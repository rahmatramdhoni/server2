<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {
	public function tampil_jadwal()
	{
		# code...
		$data=$this->db->get('t_jadwal');
		return $data->result();
	}

	public function tambah_jadwal($datae)
	{
		# code...
		$tam = $this->db->insert('t_jadwal',$datae);
		return $tam;
	}
	public function update_jadwal($id,$data)
	{
		# code...
		$this->db->where('id_jadwal',$id);
		$update = $this->db->update('t_jadwal',$data);
		return $update;
	}
	public function get_data($id)
	{
		# code...
		$this->db->where('id_jadwal',$id);
		$getdata = $this->db->get('t_jadwal');
		return $getdata->result();
	}
	public function delete($id)
	{
		# code...
		$this->db->where('id_jadwal',$id);
		$delete = $this->db->delete('t_jadwal');
		return $delete;
	}
}