<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Document_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('topic', $keyword);
		$this->db->from('documents');
		return $this->db->count_all_results();
	}

	public function fetch_document($limit, $start, $keryword)
	{
		$this->db->select('documents.*,categories.name,tb_admin.admin_name');
		$this->db->from('documents');
		$this->db->join('categories','categories.id=documents.categorie_id');
		$this->db->join('tb_admin','tb_admin.id=documents.created_by');
		$this->db->like('topic', $keryword);
		$this->db->limit($limit, $start);
		$query = $this->db->get();
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

	public function entry_document($id,$filename = '')
	{
		$data = array(
			'document_code'=> $this->input->post('document_code'),
			'register_date'=> $this->input->post('register_date'),
			'reference'    => $this->input->post('reference'),
			'topic'        => $this->input->post('topic'),
			'store'        => $this->input->post('store'),
			'filename'     => $filename,
			'modified_date'=> date('Y-m-d H:i:s'),
			'modified_by'  => $this->session->userdata('login_id'),
			'categorie_id' => $this->input->post('categorie_id'),
			'description'  => $this->input->post('description')
		);
		if($id == NULL)
		{
			$data['created_by'] = $this->session->userdata('login_id');
			$data['created_date'] = date('Y-m-d H:i:s');
			$this->db->insert('documents', $data);
		}
		else
		{
			$this->db->update('documents', $data, array('id'=> $id));
		}
	}

	public function read_document($id)
	{
		$this->db->select('documents.*,categories.name');
		$this->db->from('documents');
		$this->db->join('categories','categories.id=documents.categorie_id');
		$this->db->where('documents.id', $id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}

	public function remove_document($id)
	{
		$this->db->delete('documents', array('id'=> $id));
	}

}
