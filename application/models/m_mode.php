<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mode extends CI_Model {
	public function tampil_mode()
	{
		# code...
		$data=$this->db->get('t_mode');
		return $data->result();
	}
	public function tambah_mode($datae)
	{
		# code...
		$tambah = $this->db->insert('t_mode',$datae);
		return $tambah;
	}
	public function update_mode($id,$data)
	{
		# code...
		$this->db->where('id',$id);
		$update = $this->db->update('t_mode',$data);
		return $update;
	}
	public function get_data($id)
	{
		# code...
		$this->db->where('id',$id);
		$getdata = $this->db->get('t_mode');
		return $getdata->result();
	}
	public function delete($id)
	{
		# code...
		$this->db->where('id',$id);
		$delete = $this->db->delete('t_mode');
		return $delete;
	}
	
}