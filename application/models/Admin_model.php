<?php

class Admin_model extends CI_Model
{

	public $admin_name;
	//public $description;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('admin_name',$keyword);
		$this->db->from('tb_admin');
		return $this->db->count_all_results();
	}

	public function fetch_admin($limit, $start,$keryword)
	{
		$this->db->like('admin_name',$keryword);
		$this->db->limit($limit, $start);
		$query = $this->db->get('tb_admin');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}

	public function entry_admin($id)
	{
		$this->admin_name = $this->input->post('admin_name');
		$this->username = $this->input->post('username');
		$this->password = md5($this->input->post('password'));
		//$this->description = $this->input->post('description');
		if($id == NULL)
		{
			$this->db->insert('tb_admin', $this);
		}
		else
		{
			$this->db->update('tb_admin', $this, array('id'=> $id));
		}
	}
	public function read_admin($id){
		$this->db->where('id',$id);
		$query = $this->db->get('tb_admin');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function remove_admin($id){
		$this->db->delete('tb_admin',array('id'=>$id));
	}

}
