<?php

class ListPrd_model extends CI_Model
{

	public $img_detail;
	//public $description;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('img_detail',$keyword);
		$this->db->from('img');
		return $this->db->count_all_results();
	}

/*
	public function fetch_prd($limit, $start,$keryword)
	{
		$this->db->like('img_detail',$keryword);
		$this->db->limit($limit, $start);
		$query = $this->db->get('img');
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

*/

public function fetch_listprd($limit, $start, $keryword)
	{
		$this->db->select('img.*,imgtype.imgtype_name');
		$this->db->from('img');
		$this->db->join('imgtype','imgtype.imgtype_id=img.imgtype_id');
		$this->db->like('img_detail', $keryword);
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

	// public function fetch_listprdtop()
	// {
	// 	$this->db->select('booksdetail.*');
	// 	$this->db->from('booksdetail');
	// 	$this->db->group_by('img_id');
	// 	$this->db->order_by('img_id', 'desc');
	// 	//$this->db->join('imgtype','imgtype.imgtype_id=img.imgtype_id');
	// 	//$this->db->like('img_detail', $keryword);
	// 	//$this->db->limit($limit, $start);
	// 	// $query = $this->db->get();
	// 	// if($query->num_rows() > 0)
	// 	// {
	// 	// 	foreach($query->result() as $row)
	// 	// 	{
	// 	// 		$data[] = $row;
	// 	// 	}
	// 	// 	return $data;
	// 	// }
	// 	// return FALSE;
	// }






	// public function entry_listprd($img_id)
	// {
	// 	$this->img_detail = $this->input->post('img_detail');
	// 	//$this->description = $this->input->post('description');
	// 	if($img_id == NULL)
	// 	{
	// 		$this->db->insert('img', $this);
	// 	}
	// 	else
	// 	{
	// 		$this->db->update('img', $this, array('img_id'=> $img_id));
	// 	}
	// }

public function read_listprd($img_id)
	{
		///$this->db->select('img.*,imgtype.imgtype_name');
		//$this->db->from('img');
		//$this->db->join('imgtype','imgtype.imgtype_id=img.imgtype_id');
		//$this->db->where('img.img_id', $img_id);
		//$query = $this->db->get('imgq');
		// //echo $query;
		$sql="SELECT `img`.*, `imgtype`.`imgtype_name` FROM `img` JOIN `imgtype` ON `imgtype`.`imgtype_id`=`img`.`imgtype_id` WHERE `img`.`img_id` = $img_id";

		$rs = $this->db->query($sql)->row();

		// //eixt();
		// if($query->num_rows() > 0)
		// {
		// 	$data = $query->row();
		// 	return $data;
		// }
		return $rs;

		//echo "no";
	}

	public function read_booking($img_id)
	{
		///$this->db->select('img.*,imgtype.imgtype_name');
		//$this->db->from('img');
		//$this->db->join('imgtype','imgtype.imgtype_id=img.imgtype_id');
		//$this->db->where('img.img_id', $img_id);
		//$query = $this->db->get('imgq');
		// //echo $query;
		$sql="SELECT `img`.*, `imgtype`.`imgtype_name` FROM `img` JOIN `imgtype` ON `imgtype`.`imgtype_id`=`img`.`imgtype_id` WHERE `img`.`img_id` = $img_id";

		$rs = $this->db->query($sql)->row();

		// //eixt();
		// if($query->num_rows() > 0)
		// {
		// 	$data = $query->row();
		// 	return $data;
		// }
		return $rs;

		//echo "no";
	}


public function do_booking()
	{

		//print_r($_POST);

		//exit;
		///$this->db->select('img.*,imgtype.imgtype_name');
		//$this->db->from('img');
		//$this->db->join('imgtype','imgtype.imgtype_id=img.imgtype_id');
		//$this->db->where('img.img_id', $img_id);
		//$query = $this->db->get('imgq');
		// //echo $query;
		// $sql="SELECT `img`.*, `imgtype`.`imgtype_name` FROM `img` JOIN `imgtype` ON `imgtype`.`imgtype_id`=`img`.`imgtype_id` WHERE `img`.`img_id` = $img_id";

		// $rs = $this->db->query($sql)->row();

		// // //eixt();
		// // if($query->num_rows() > 0)
		// // {
		// // 	$data = $query->row();
		// // 	return $data;
		// // }
		// return $rs;

		//echo "no";
	}







	// public function remove_prd($img_id){
	// 	$this->db->delete('img',array('img_id'=>$img_id));
	// }

}
