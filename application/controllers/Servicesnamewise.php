<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Servicesnamewise  extends Back_end {

	public function __construct() 
	{
		parent::__construct();	
		 $this->load->model('Services_model');
	}
	public function add()
	{
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			$data['servicesname_list']=$this->Services_model->get_servicesname_list();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('services/add',$data);
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
	   $login_details=$this->session->userdata('user_details');
		$post=$this->input->post();
		//echo'<pre>';print_r($post);exit;
		$check_ative=$this->Services_model->check_servicesname_active_ornot($post['services']);
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"servicesname already exists. Please another servicesname.");	
			redirect('servicesnamewise/lists');	
		}
		$add_data=array(
		'services'=>isset($post['services'])?$post['services']:'',
		'text'=>isset($post['text'])?$post['text']:'',
		'status'=>1,
		'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s'),
		'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
		);
		//echo'<pre>';print_r($add_data);exit;
		 $save=$this->Services_model->save_servicesname_details($add_data);	
				//echo'<pre>';print_r($save);exit;
		       if(count($save)>0){
					$this->session->set_flashdata('success'," servicesname details successfully added");	
					redirect('servicesnamewise/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('servicesnamewise/add');
					}   
		   
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function lists()
	{
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			$data['servicesname_list']=$this->Services_model->servicesname_list_data();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('services/list',$data);
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
			$login_details=$this->session->userdata('user_details');
			$user_details=base64_decode($this->uri->segment(3));
			$data['servicesname_list']=$this->Services_model->get_servicesname_list();
			$data['edit_servicesname']=$this->Services_model->edit_servicesname_list($user_details);
				//echo'<pre>';print_r($data);exit;
			$this->load->view('services/edit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function editpost(){
		if($this->session->userdata('user_details'))
		{
			$login_details=$this->session->userdata('user_details');
	     $post=$this->input->post();	
		  //echo'<pre>';print_r($post);exit;
		  $edit_servicesname=$this->Services_model->edit_servicesname_list($post['s_n_id']);
		  if($edit_servicesname['services']!=$post['services']){
			$check=$this->Services_model->check_servicesname_active_ornot($post['services']);
			//echo'<pre>';print_r($check);exit;
			if(count($check)>0){
				     $this->session->set_flashdata('error',"servicesname already exists. Please another servicesname.");
					 redirect('servicesnamewise/edit/'.base64_encode($post['s_n_id']));
			      }	
			}
		       $update_data=array(
	            'text'=>isset($post['text'])?$post['text']:'',
		        'services'=>isset($post['services'])?$post['services']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				 );
				//echo'<pre>';print_r($update_data);exit;
                $update=$this->Services_model->update_servicesname_details($post['s_n_id'],$update_data);	
				// echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"servicesname details successfully updated");	
					redirect('servicesnamewise/lists');	
					  }else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('servicesnamewise/edit/'.base64_encode($post['s_n_id']));
					  }    
				
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('admin');
				}
	}
	public function status(){
	 if($this->session->userdata('user_details'))
		{	
         $login_details=$this->session->userdata('user_details');	
	             $s_n_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					$profile_id=base64_decode($this->uri->segment(5));
					//exit;
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					
					
					if($s_n_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Services_model->update_servicesname_details($s_n_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"servicesname details   successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"servicesname details  successfully Activate.");
								}
								redirect('servicesnamewise/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('servicesnamewise/lists');
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
	public function delete()
{

		if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $s_n_id=base64_decode($this->uri->segment(3));
					
					if($s_n_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Services_model->update_servicesname_details($s_n_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"servicesname details  successfully deleted.");
								redirect('servicesnamewise/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('servicesnamewise/lists');
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
	
	
	
	
	
	
	
	
	
}
