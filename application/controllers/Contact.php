<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$this->load->model('Admin_model');
	}
	public function index()
	{	
		if(!$this->session->userdata('user_details'))
		{
			$data['contact_list']=$this->Home_model->get_contact_list();
			$data['services_list']=$this->Home_model->get_services_list();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('html/header',$data);
			$this->load->view('html/contactus',$data);
			$this->load->view('html/footer',$data);
		}
	}
	public  function post(){
		if(!$this->session->userdata('user_details'))
		{
	$post=$this->input->post();
		    $addcontact=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'phone_number'=>isset($post['phone_number'])?$post['phone_number']:'',
				'subject'=>isset($post['subject'])?$post['subject']:'',
				'message'=>isset($post['message'])?$post['message']:'',
				'created_at'=>date('Y-m-d H:i:s'),
				);

				$save=$this->Home_model->save_contact_details($addcontact);
				if(count($save)>0){
						$details=$this->Home_model->get_contact_list();

						$this->load->library('email');
						$this->load->library('email');
						$this->email->set_newline("\r\n");
						$this->email->set_mailtype("html");
						$this->email->from($post['email']);
						$this->email->to($details['email_address']);
						$this->email->subject('Contact us - Request');
						$msg='Name:'.$post['name'].'<br> Email :'.$post['email'].'<br>  Phone  number :'.$post['phone_number'].'<br>  Message :'.$post['message'].'<br> Subject :'.$post['subject'];
						$this->email->message($msg);
						$this->email->send();
						
						//echo "test";exit;
						$this->session->set_flashdata('success',"Your message was successfully sent.");
						redirect($this->agent->referrer());
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect($this->agent->referrer());
			}
		      }else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('');
			}
}
	
	public function lists()
	{	
		if($this->session->userdata('user_details'))
		{
			$user_details=$this->session->userdata('user_details');
			$data['details']=$this->Admin_model->get_admin_details($user_details['a_id']);
		   $data['contact_list']=$this->Admin_model->get_contact_list();
          //echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/contact_list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
}
