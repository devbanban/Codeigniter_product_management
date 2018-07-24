<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$config = array();
		$config['base_url'] = base_url('admin/index');
		$config['total_rows'] = $this->admin_model->record_count($this->input->get('keyword'));
		$config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->admin_model->fetch_admin($config['per_page'], $page, $this->input->get('keyword'));
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('template/backheader');
		$this->load->view('admin/mainpage', $data);
		$this->load->view('template/backfooter');
	}

	public function newdata()
	{
		$this->load->view('template/backheader');
		$this->load->view('admin/newdata');
		$this->load->view('template/backfooter');
	}

	public function postdata()

	{

//print_r($_POST);

		if($this->input->server('REQUEST_METHOD') == TRUE){
			$this->form_validation->set_rules('admin_name', 'ชื่อ', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('username', 'username', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('password', 'password', 'required', array('required'=> 'ค่าห้ามว่าง!'));


			if($this->form_validation->run() == TRUE){
				$this->session->set_flashdata(
					array(
						'msginfo'=>'<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
					)
				);
				$this->admin_model->entry_admin($this->input->post('id'));
				redirect('admin', 'refresh');
			}
			else
			{
				$data = array(
					'error_admin_name' 	=> form_error('admin_name'),
					'error_username' 	=> form_error('username'),
					'error_password' 	=> form_error('password'),
					'admin_name' 		=> set_value('admin_name'),
					'username' 			=> set_value('username'),
					'password' 			=> set_value('password')


					//'description'=> set_value('description')
				);
				$this->session->set_flashdata($data);
			}
			if($this->input->post('id') == NULL){
				redirect('admin/newdata');
			}
			else
			{
				redirect('admin/edit/'.$this->input->post('id'));
			}
		}
	}
	public function edit($id)
	{
		$data['result'] = $this->admin_model->read_admin($id);
		$this->load->view('template/backheader');
		$this->load->view('admin/edit',$data);
		$this->load->view('template/backfooter');
	}

	public function confrm($id)
	{
		$data = array
		(
			'backlink'  => 'admin',
			'deletelink'=> 'admin/remove/' . $id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm',$data);
		$this->load->view('template/backfooter');
	}

	public function remove($id)
	{
		$this->admin_model->remove_admin($id);
		redirect('admin','refresh');
	}


}
