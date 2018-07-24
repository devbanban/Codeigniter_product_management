<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('member_model');
	}

	public function index()
	{
		$config = array();
		$config['base_url'] = base_url('member/index');
		$config['total_rows'] = $this->member_model->record_count($this->input->get('keyword'));
		$config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->member_model->fetch_Member($config['per_page'], $page, $this->input->get('keyword'));
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('template/backheader');
		$this->load->view('member/mainpage', $data);
		$this->load->view('template/backfooter');
	}

	public function newdata()
	{
		$this->load->view('template/backheader');
		$this->load->view('member/newdata');
		$this->load->view('template/backfooter');
	}

	public function postdata()
	{
		if($this->input->server('REQUEST_METHOD') == TRUE){

			$this->form_validation->set_rules('name', 'ชื่อ', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('lastname', 'สกุล', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			//$this->form_validation->set_rules('gender', 'เพศ', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			//$this->form_validation->set_rules('address', 'ที่อยู่', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('email', 'email', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('tel', 'เบอร์โทร', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('brithday', 'วันเกิด', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('username', 'username', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('password', 'password', 'required', array('required'=> 'ค่าห้ามว่าง!'));



			if($this->form_validation->run() == TRUE){
				$this->session->set_flashdata(
					array(
						'msginfo'=>'<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
					)
				);
				$this->member_model->entry_member($this->input->post('user_id'));
				redirect('member', 'refresh');
			}
			else
			{
				$data = array(
					'error_name' 		=> form_error('name'),
					'error_lastname' 	=> form_error('lastname'),
					//'error_gender' 		=> form_error('gender'),
					//'error_address' 	=> form_error('address'),
					'error_email' 		=> form_error('email'),
					'error_tel' 		=> form_error('tel'),
					'error_brithday' 	=> form_error('brithday'),
					'error_username' 	=> form_error('username'),
					'error_password' 	=> form_error('password'),

					'name'       		=> set_value('name'),
					'lastname'       	=> set_value('lastname'),
					'gender'       		=> set_value('gender'),
					'address'       	=> set_value('address'),
					'email'       		=> set_value('email'),
					'tel'       		=> set_value('tel'),
					'brithday'       	=> set_value('brithday'),
					'username'       	=> set_value('username'),
					'password'       	=> set_value('password')

				);
				$this->session->set_flashdata($data);
			}
			if($this->input->post('user_id') == NULL){
				redirect('member/newdata');
			}
			else
			{
				redirect('member/edit/'.$this->input->post('user_id'));
			}
		}
	}
	public function edit($user_id)
	{
		$data['result'] = $this->member_model->read_member($user_id);
		$this->load->view('template/backheader');
		$this->load->view('member/edit',$data);
		$this->load->view('template/backfooter');
	}

	public function confrm($user_id)
	{
		$data = array
		(
			'backlink'  => 'member',
			'deletelink'=> 'member/remove/' . $user_id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm',$data);
		$this->load->view('template/backfooter');
	}

	public function remove($user_id)
	{
		$this->member_model->remove_member($user_id);
		redirect('member','refresh');
	}


}
