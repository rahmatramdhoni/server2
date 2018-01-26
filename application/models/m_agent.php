<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agent extends CI_Model {
	public function tampil_agent()
	{
		# code...
		$data=$this->db->get('t_agent');
		return $data->result();
	}
	public function tambah_agent($datae)
	{
		# code...
		$tambah = $this->db->insert('t_agent',$datae);
		return $tambah;
	}
	public function update_agent($id,$data)
	{
		# code...
		$this->db->where('id',$id);
		$update = $this->db->update('t_agent',$data);
		return $update;
	}
	public function get_data($id)
	{
		# code...
		$this->db->where('id',$id);
		$getdata = $this->db->get('t_agent');
		return $getdata->result();
	}
	public function delete($id)
	{
		# code...
		$this->db->where('id',$id);
		$delete = $this->db->delete('t_agent');
		return $delete;
	}
}