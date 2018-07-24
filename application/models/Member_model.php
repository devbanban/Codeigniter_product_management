<?php

class Member_model extends CI_Model
{

	

	public $name;
	//public $description;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('name',$keyword);
		$this->db->from('userdetail');
		return $this->db->count_all_results();
	}

	public function fetch_member($limit, $start,$keryword)
	{
		$this->db->like('name',$keryword);
		$this->db->limit($limit, $start);
		$query = $this->db->get('userdetail');
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

	public function entry_member($user_id)
	{
		$this->name = $this->input->post('name');
		$this->lastname = $this->input->post('lastname');
		$this->brithday = $this->input->post('brithday');
		$this->gender = $this->input->post('gender');
		$this->address = $this->input->post('address');
		$this->email = $this->input->post('email');
		$this->tel = $this->input->post('tel');
		$this->username = $this->input->post('username');
		$this->password = $this->input->post('password');
		//$this->description = $this->input->post('description');
		if($user_id == NULL)
		{
			$this->db->insert('userdetail', $this);
		}
		else
		{
			$this->db->update('userdetail', $this, array('user_id'=> $user_id));
		}
	}
	public function read_member($user_id){
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('userdetail');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function remove_member($user_id){
		$this->db->delete('userdetail',array('user_id'=>$user_id));
	}

}
