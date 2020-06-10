<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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
		$this->load->model('Services_model');
	}
	public function index()
	{	
		if(!$this->session->userdata('user_details'))
		{
			
			
			
			//$data['serviesnamewise_list']=$this->Admin_model->get_serviesnamewise_list_list($course_profile_id);
			
			$data['contact_list']=$this->Home_model->get_contact_list();
			$data['services_list']=$this->Home_model->get_services_list();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('html/header',$data);
			$this->load->view('html/laser-root-canal');
			$this->load->view('html/footer',$data);
		}
	}
	public function add()
	{	
		if($this->session->userdata('user_details'))
		{
			$user_details=$this->session->userdata('user_details');
			$data['details']=$this->Admin_model->get_admin_details($user_details['a_id']);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('services/add-services');
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	
	public function addpost()
	{	
		if($this->session->userdata('user_details'))
		{
			$userdetails=$this->session->userdata('user_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
				$cnt=0;foreach($post['services_name'] as $lis){
							$save_data = array(
							'services_name'=>$lis,
							'status'=>1,
							'created_at'=>date('Y-m-d H:i:s'),
							'updated_at'=>date('Y-m-d H:i:s'),
							'created_by'=>$userdetails['a_id']   
						);
						//echo'<pre>';print_r($save_data);
					$save=$this->Services_model->save_services_details($save_data);		
					$cnt++;
					}
				
				//exit;
					if(count($save)>0){
							$this->session->set_flashdata('success','Services details successfully added');
							redirect('services/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services/add');
						}
					
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function lists()
	{	
		if($this->session->userdata('user_details'))
		{
			$user_details=$this->session->userdata('user_details');
			$data['details']=$this->Admin_model->get_admin_details($user_details['a_id']);
		$data['services_list']=$this->Services_model->get_services_list();
          //echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('services/services-list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function edit()
	{	
		if($this->session->userdata('user_details'))
		{
			$user_details=$this->session->userdata('user_details');
			$data['details']=$this->Admin_model->get_admin_details($user_details['a_id']);
			$s_id=base64_decode($this->uri->segment(3));
			$data['services_details']=$this->Services_model->get_services_details($s_id);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('services/edit-services',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function editpost()
	{	
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			$post=$this->input->post();
			//echo'<pre>';print_r($post);exit;
					
					$update_data=array(
					'services_name'=>isset($post['services_name'])?$post['services_name']:'',
							'status'=>1,
							'created_at'=>date('Y-m-d H:i:s'),
							'updated_at'=>date('Y-m-d H:i:s'),
							'created_by'=>$userdetails['a_id'] 
					);
					//echo'<pre>';print_r($update_data);exit;
						$update=$this->Services_model->update_services_details($post['s_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Services details successfully Updated');
							redirect('services/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services/edit/'.base64_encode($post['s_id']));
						}
		    }else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
		public function status()
	{	
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			$post=$this->input->post();
			$s_id=base64_decode($this->uri->segment(3));
			$status=base64_decode($this->uri->segment(4));
			if($status==1){
				$stat=0;
			}else{
				$stat=1;
			}
			$update_data=array(
					'status'=>$stat,
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Services_model->update_services_details($s_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','services details successfully deactivated');
							}else{
							$this->session->set_flashdata('success','services details  successfully activated');
							}
							redirect('services/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services/lists');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function delete()
{

		if($this->session->userdata('user_details'))
		{	
         $login_details=$this->session->userdata('user_details');	
	             $s_id=base64_decode($this->uri->segment(3));
					
					if($s_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Services_model->update_services_details($s_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"services details successfully  successfully deleted.");
								redirect('services/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('services/lists');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
           }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}

		
		
	}
	
	
	public function name()
	{	
		if(!$this->session->userdata('user_details'))
		{
			
			  $s_id=base64_decode($this->uri->segment(3));
		   $data['services_details']=$this->Admin_model->get_services_list_details($s_id);
		   //echo'<pre>';print_r($data);exit;
			$data['contact_list']=$this->Home_model->get_contact_list();
			$data['services_list']=$this->Home_model->get_services_list();
			//$data['services_name_list']=$this->Home_model->get_services_name_list();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('html/header',$data);
			$this->load->view('html/services-details',$data);
			$this->load->view('html/footer',$data);
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
