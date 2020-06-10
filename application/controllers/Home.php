<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
		public function __construct() 
		{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Home_model');
	
		}

		public function index()
		{	
		if(!$this->session->userdata('user_details'))
		{
			
			
			
		$data['contact_list']=$this->Home_model->get_contact_list();
		$data['aboutus_list']=$this->Home_model->get_aboutus_list();
		$data['homepage_list']=$this->Home_model->get_homepage_list();
		$data['facts_list']=$this->Home_model->get_fact_list();
		$data['services_list']=$this->Home_model->get_services_list();
		$data['banners_list']=$this->Home_model->get_banners_list();
		$data['testimonial_list']=$this->Home_model->get_testimonial_list();
		$data['doctors_list']=$this->Home_model->get_doctors_list_list();
		
		 $data['services_details']=$this->Home_model->get_services_list_details();
		
		
			//echo'<pre>';print_r($data);exit;	
		$this->load->view('html/header',$data);
		$this->load->view('html/index',$data);
		$this->load->view('html/footer',$data);
		}
		}		
	public  function subscribe(){
	$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$addcontact=array(
				'email'=>isset($post['email'])?$post['email']:'',
				'created_at'=>date('Y-m-d H:i:s'),
				);
				
				$check=$this->Home_model->check_email_subscribe($post['email']);
				if(count($check)>0){
					   $this->session->set_flashdata('error',"You are already subscribed ");
						redirect($this->agent->referrer());
					
				}else{
					$save=$this->Home_model->save_subscribe($addcontact);
					if(count($save)>0){
					
							$this->session->set_flashdata('success',"You have been successfully subscribed ");
							redirect($this->agent->referrer());
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect($this->agent->referrer());
					}
				}
}
	
	
	
	
	
	
}
