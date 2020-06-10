<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

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
		$this->load->model('Aboutus_model');
		$this->load->model('Admin_model');
	}
	public function index()
	{	
		if(!$this->session->userdata('user_details'))
		{
			$data['facts_list']=$this->Home_model->get_fact_list();
			$data['contact_list']=$this->Home_model->get_contact_list();
			$data['aboutus_list']=$this->Home_model->get_aboutus_list();
			$data['services_list']=$this->Home_model->get_services_list();
			$data['testimonial_list']=$this->Home_model->get_testimonial_list();
			//echo'<pre>';print_r($data);exit;

			$this->load->view('html/header',$data);
			$this->load->view('html/aboutus',$data);
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
			$this->load->view('aboutus/add-aboutus');
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
			$check_ative=$this->Aboutus_model->check_aboutus_active_or_not();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one aboutus is active. Please try again");	
			redirect('aboutus/lists');	
		}
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$images = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/aboutus/" . $images);
						}else{
							$images='';
						}
					if(isset($_FILES['pic']['name']) && $_FILES['pic']['name']!=''){
							$temp = explode(".", $_FILES["pic"]["name"]);
							$pics = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['pic']['tmp_name'], "assets/aboutus/" . $pics);
						}else{
							$pics='';
						}		
						
						
		    $save_data=array(
			'title'=>isset($post['title'])?$post['title']:'',
			'heading'=>isset($post['heading'])?$post['heading']:'',
			'description'=>isset($post['description'])?$post['description']:'',
			'years_experience'=>isset($post['years_experience'])?$post['years_experience']:'',
			'image'=>isset($images)?$images:'',
			'pic'=>isset($pics)?$pics:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
			);
		 //echo'<pre>';print_r($save_data);exit;
		$save=$this->Aboutus_model->save_aboutus_details($save_data);
		
		if(count($save)>0){
			if(isset($post['type']) && count($post['type'])>0){
					$cnt=0;foreach($post['type'] as $list){ 
						  $add_data=array(
						  'a_id'=>isset($save)?$save:'',
						  'type'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Aboutus_model->save_aboutus_types_details($add_data);	

				       $cnt++;}
					}
					  $this->session->set_flashdata('success',"Aboutus details successfully added");	
							redirect('aboutus/lists');	
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('aboutus/add');
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
			$user_details=$this->session->userdata('user_details');
			$data['aboutus_list']=$this->Aboutus_model->get_aboutus_list();
			  //echo'<pre>';print_r($data);exit;
			$data['details']=$this->Admin_model->get_admin_details($user_details['a_id']);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('aboutus/aboutus-list',$data);
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
		  $a_id=base64_decode($this->uri->segment(3));
		   $data['aboutus_details']=$this->Aboutus_model->get_aboutus_details($a_id);
			//echo '<pre>';print_r($data);exit;
			$data['details']=$this->Admin_model->get_admin_details($user_details['a_id']);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('aboutus/edit-aboutus',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function remove_type()
	{
		if($this->session->userdata('user_details'))
		{
	    $post=$this->input->post();
		
		$a_id=base64_decode ($this->uri->segment(3));
			//echo '<pre>';print_r($a_id);exit;
		$delete_aboutus_type=$this->Aboutus_model->delete_aboutus_type($a_id);
		if(count($delete_aboutus_type)>0){
					$this->session->set_flashdata('success',"aboutus  details successfully deleted.");
				redirect('aboutus/edit/'.base64_encode(1).'/'.$post['a_id']);

					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('aboutus/edit/'.base64_encode(1).'/'.$post['a_id']);
				  }	
       }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('admin');  
	   }

				  
}	
	public function editpost()
	{
	if($this->session->userdata('user_details'))
		{	
		$login_details=$this->session->userdata('user_details');
        $post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$aboutus_details=$this->Aboutus_model->get_aboutus_details($post['a_id']);
		if($_FILES['image']['name']!=''){
					if($aboutus_details['image']!=''){
						unlink('assets/aboutus/'.$aboutus_details['image']);
					}
					$banners=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/aboutus/" . $_FILES['image']['name']);
					}else{
					$banners=$aboutus_details['image'];
					}
					
				if($_FILES['pic']['name']!=''){
					if($aboutus_details['pic']!=''){
						unlink('assets/aboutus/'.$aboutus_details['pic']);
					}
					$pics=$_FILES['pic']['name'];
					move_uploaded_file($_FILES['pic']['tmp_name'], "assets/aboutus/" . $_FILES['pic']['name']);
					}else{
					$pics=$aboutus_details['pic'];
					}	
         $update_data=array(
		'title'=>isset($post['title'])?$post['title']:'',
			'heading'=>isset($post['heading'])?$post['heading']:'',
			'description'=>isset($post['description'])?$post['description']:'',
			'years_experience'=>isset($post['years_experience'])?$post['years_experience']:'',
			'image'=>$banners,
			'pic'=>$pics,
			'org_pic'=>$pics,
			'org_image'=>$banners,
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
			);
		//echo '<pre>';print_r($update_data);exit;
		$update=$this->Aboutus_model->update_aboutus_details($post['a_id'],$update_data);
		//echo '<pre>';print_r($update);exit;
		if(count($update)>0){
			$details=$this->Aboutus_model->get_aboutus_type_details($post['a_id']);
				  if(count($details)>0){
					  foreach($details as $lis){
						 $this->Aboutus_model->delete_aboutus_type($lis['a_t_id']); 
					  }
					}
					if(isset($post['type']) && count($post['type'])>0){
					$cnt=0;foreach($post['type'] as $list){ 
						  $add_data=array(
						  'a_id'=>isset($post['a_id'])?$post['a_id']:'',
						  'type'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Aboutus_model->save_aboutus_type_details($add_data);	

				       $cnt++;}
					}
			
			$this->session->set_flashdata('success',"Aboutus details successfully  updated");	
			redirect('aboutus/lists');	
			
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('aboutus/lists');
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
	             $a_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($status==0){
					$check_ative=$this->Aboutus_model->check_aboutus_active_or_not();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one aboutus is active. Please try again");	
			redirect('aboutus/lists');	
		}
					}
					if($a_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Aboutus_model->update_aboutus_details($a_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Aboutus details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Aboutus details successfully Activate.");
								}
								redirect('aboutus/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/lists');
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

		if($this->session->userdata('user_details'))
		{	
         $login_details=$this->session->userdata('user_details');	
	             $a_id=base64_decode($this->uri->segment(3));
					
					if($a_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Aboutus_model->update_aboutus_details($a_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Aboutus details successfully  successfully deleted.");
								redirect('aboutus/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/lists');
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
