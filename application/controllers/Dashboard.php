<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Dashboard extends Back_end {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Home_model');
	}
	public function index()
	{	
		if($this->session->userdata('user_details'))
		{
			
			$data['facts_list']=$this->Home_model->get_fact_list();
			$this->load->view('admin/index',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public  function logout(){
		$admindetails=$this->session->userdata('user_details');
		$userinfo = $this->session->userdata('user_details');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('user_details');
		$this->session->unset_userdata('user_details');
        redirect('');
	}
	
	
	
	
	
}
