<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class prd extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Imgtype_model');
		$this->load->model('prd_model');
	}

	public function index()
	{
		$config = array();
		$config['base_url'] = base_url('imgtype/index');
		$config['total_rows'] = $this->prd_model->record_count($this->input->get('keyword'));
		$config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->prd_model->fetch_prd($config['per_page'], $page, $this->input->get('keyword'));
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('template/backheader');
		$this->load->view('prd/mainpage', $data);
		$this->load->view('template/backfooter');
	}



//show select list imgtype  for from add 
public function newdata()
	{
		$data['results'] = $this->Imgtype_model->fetch_imgtype(0,0,'');
		$this->load->view('template/backheader');
		$this->load->view('prd/newdata',$data);
		$this->load->view('template/backfooter');
	}




public function adding($value='')
	{
		
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('img'))
                {
                        //$error = array('error' => $this->upload->display_errors());
                        echo $this->upload->display_errors();
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        
                        $data = $this->upload->data();

                        //print_r($data);
                        //$this->load->view('upload_success', $data);

                        $filename = $data['file_name'];
                        //$imgtype_name = $data['imgtype_name'];

                        $arr=array(
                        		'img_name'=> $this->input->post('img_name'),
                        		'img_detail'=> $this->input->post('img_detail'),
                        		'img_price'=> $this->input->post('img_price'),
                        		'imgtype_id'=> $this->input->post('imgtype_id'),
                        		"img"=>$filename
                        	);
                        $this->db->insert('img',$arr);

                        $this->session->set_flashdata(
					array(
						'msginfo'=>'<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
					)
				);

                        redirect('prd', 'refresh');

                }
	}




/*

	public function postdata()
	{
		if($this->input->server('REQUEST_METHOD') == TRUE){
			$this->form_validation->set_rules('bname', 'bnumber', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			if($this->form_validation->run() == TRUE){
				$this->session->set_flashdata(
					array(
						'msginfo'=>'<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
					)
				);
				$this->prd_model->entry_prd($this->input->post('img_id'));
				redirect('prd', 'refresh');
			}
			else
			{
				$data = array(
					'error_name' => form_error('img_detail'),
					'name'       => set_value('img_detail')
					//'description'=> set_value('description')
				);
				$this->session->set_flashdata($data);
			}
			if($this->input->post('img_id') == NULL){
				redirect('prd/newdata');
			}
			else
			{
				redirect('prd/edit/'.$this->input->post('img_id'));
			}
		}
	}

*/


/*

	public function edit($img_id)
	{
		$data['result'] = $this->prd_model->read_prd($img_id);
		$this->load->view('template/backheader');
		$this->load->view('prd/edit',$data);
		$this->load->view('template/backfooter');
	}
*/


public function update($value='')
	{
		
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

                $this->load->library('upload', $config);


                //print_r($_POST);

                //exit();

                if ( ! $this->upload->do_upload('img'))
                {
                        //$error = array('error' => $this->upload->display_errors());
                        //echo $this->upload->display_errors();
                        //$this->load->view('upload_form', $error);


				$arr1=array(
                        		'img_name'=> $this->input->post('img_name'),
                        		'img_detail'=> $this->input->post('img_detail'),
                        		'img_price'=> $this->input->post('img_price'),
                        		'imgtype_id'=> $this->input->post('imgtype_id'),
                        		//'imgtype_id'=> $this->input->post('imgtype_id'),
                        		"img"=>$this->input->post('img2')
                        		
                        	);
                        $this->db->where('img_id', $this->input->post('img_id'));
                        $this->db->update('img', $arr1);


               	$this->session->set_flashdata( 		
                		array(
						'msginfo'=>'<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-success"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ [ไม่เปลี่ยนภาพ]</div></div>'
					)
				);

                	redirect('prd', 'refresh');


                }
                else
                {
                        
                        $data = $this->upload->data();

                       // print_r($data);
                        //$this->load->view('upload_success', $data);

                        $filename = $data['file_name'];
                        //$imgtype_name = $data['imgtype_name'];

                       /*
                        if($filename!=''){
                        	echo "has";

                        }else{
                        	echo "no";
                        }
*/
                        //exit();

                        $arr=array(
                        		'img_name'=> $this->input->post('img_name'),
                        		'img_detail'=> $this->input->post('img_detail'),
                        		'img_price'=> $this->input->post('img_price'),
                        		'imgtype_id'=> $this->input->post('imgtype_id'),
                        		//'imgtype_id'=> $this->input->post('imgtype_id'),
                        		"img"=>$filename
                        	);

                         $this->db->where('img_id', $this->input->post('img_id'));
                        $this->db->update('img', $arr);

                        $this->session->set_flashdata(
					array(
						'msginfo'=>'<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
					)
				);

                       redirect('prd', 'refresh');

                }
	}














	public function edit($img_id)
	{
		$data['results'] = $this->Imgtype_model->fetch_imgtype(0,0,'');
		$data['doc'] = $this->prd_model->read_prd($img_id);
		$this->load->view('template/backheader');
		$this->load->view('prd/edit',$data);
		$this->load->view('template/backfooter');
	}







	public function confrm($img_id)
	{
		$data = array
		(
			'backlink'  => 'prd',
			'deletelink'=> 'prd/remove/' . $img_id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm',$data);
		$this->load->view('template/backfooter');
	}

	public function remove($img_id)
	{
		$this->prd_model->remove_prd($img_id);
		redirect('prd','refresh');
	}


}
