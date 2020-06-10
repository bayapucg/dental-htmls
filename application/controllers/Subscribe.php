<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Subscribe extends Back_end {

	public function __construct() 
	{
		parent::__construct();	
		
	}
	public function lists()
	{
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			$data['user_details']=$this->Admin_model->get_admin_details($admindetails['a_id']);
			$data['subscribe_list']=$this->Admin_model->get_subscribe_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/subscribe-list',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	
	
	
}
