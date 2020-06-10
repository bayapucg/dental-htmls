<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Contactus extends Back_end {

	public function __construct() 
	{
		parent::__construct();
		
	}
	public function index()
	{	
		if($this->session->userdata('user_details'))
		{
		$data['details']=$this->Admin_model->get_contact_form_details();
		//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/contactus',$data);
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
		'location'=>isset($post['location'])?$post['location']:'',
		'timing'=>isset($post['timing'])?$post['timing']:'',
		'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
		'alert_mobile_number'=>isset($post['alert_mobile_number'])?$post['alert_mobile_number']:'',
		'email_address'=>isset($post['email_address'])?$post['email_address']:'',
		'alert_email_address'=>isset($post['alert_email_address'])?$post['alert_email_address']:'',
		'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
		'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
		'linkedIn_link'=>isset($post['linkedIn_link'])?$post['linkedIn_link']:'',
		'instagram_link'=>isset($post['instagram_link'])?$post['instagram_link']:'',
		'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s'),
		'created_by'=>isset($admindetails['a_id'])?$admindetails['a_id']:'',
		'status'=>1,
		);
		$contact=$this->Admin_model->get_contact_form_details();
		if(count($contact)>0){
		$upadte=$this->Admin_model->update_contact_form_details($addcontact);
		}else{
		$save=$this->Admin_model->save_contactus_form_details($addcontact);	
	}
		
		if(count($save)>0){
					$this->session->set_flashdata('success',"contactus details successfully added");	
					redirect('contactus');	
					}else{
					$this->session->set_flashdata('success',"contactus details successfully updated");
					redirect('contactus');
					}  
		//echo 
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
}
