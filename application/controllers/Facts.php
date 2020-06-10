<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Facts extends Back_end {

	public function __construct() 
	{
		parent::__construct();
		
	}
	public function index()
	{	
		if($this->session->userdata('user_details'))
		{
		$data['details']=$this->Admin_model->get_facts_details();
		//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/facts',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public  function post(){
		$admindetails=$this->session->userdata('user_details');
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$addcontact=array(
		'happy_clients'=>isset($post['happy_clients'])?$post['happy_clients']:'',
		'experts_doctors'=>isset($post['experts_doctors'])?$post['experts_doctors']:'',
		'quality_work'=>isset($post['quality_work'])?$post['quality_work']:'',
		'award_winners'=>isset($post['award_winners'])?$post['award_winners']:'',
		'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s'),
		'created_by'=>isset($admindetails['a_id'])?$admindetails['a_id']:'',
		'status'=>1,
		);
		$contact=$this->Admin_model->get_facts_details();
		if(count($contact)>0){
		$upadte=$this->Admin_model->update_facts_details($addcontact);
		}else{
		$save=$this->Admin_model->save_facts_details($addcontact);	
	}
		
		if(count($save)>0){
					$this->session->set_flashdata('success',"facts details successfully added");	
					redirect('facts');	
					}else{
					$this->session->set_flashdata('success',"facts details successfully updated");
					redirect('facts');
					}  
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
}
