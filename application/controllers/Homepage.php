<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Homepage  extends Back_end {

	public function __construct() 
	{
		parent::__construct();	
		 $this->load->model('Homepage_model');
	}
	public function add()
	{
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			
			$this->load->view('homepage/add');
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
			$check_ative=$this->Homepage_model->check_homepage_img_active_or_not();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one homepage image is active. Please try again");	
			redirect('form/lists');	
		}
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$images = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/homepage_images/" . $images);
						}else{
							$images='';
						}
					
						
		    $save_data=array(
			'title'=>isset($post['title'])?$post['title']:'',
			'heading'=>isset($post['heading'])?$post['heading']:'',
			'description'=>isset($post['description'])?$post['description']:'',
			'image'=>isset($images)?$images:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
			);
		 //echo'<pre>';print_r($save_data);exit;
		$save=$this->Homepage_model->save_homepage_details($save_data);
		
		if(count($save)>0){
			if(isset($post['type']) && count($post['type'])>0){
					$cnt=0;foreach($post['type'] as $list){ 
						  $add_data=array(
						  'h_i_id'=>isset($save)?$save:'',
						  'type'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Homepage_model->save_homepage_types_details($add_data);	

				       $cnt++;}
					}
					  $this->session->set_flashdata('success',"Homepage images successfully added");	
							redirect('homepage/lists');	
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('homepage/add');
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
			$data['homepage_list']=$this->Homepage_model->get_homepage_list();
			 //echo '<pre>';print_r($data);exit;
			$this->load->view('homepage/list',$data);
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
			$admindetails=$this->session->userdata('user_details');
			 $h_i_id=base64_decode($this->uri->segment(3));
		   $data['homepage_details']=$this->Homepage_model->get_homepage_details($h_i_id);
			 //echo '<pre>';print_r($data);exit;
			$this->load->view('homepage/edit',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function remove_type()
	{
		if($this->session->userdata('user_details'))
		{
	    $post=$this->input->post();
		
		$h_p_id=base64_decode ($this->uri->segment(3));
			//echo '<pre>';print_r($a_id);exit;
		$delete_aboutus_type=$this->Homepage_model->delete_homepage_type($h_p_id);
		if(count($delete_aboutus_type)>0){
					$this->session->set_flashdata('success',"Homepage images successfully deleted.");
				redirect('homepage/edit/'.base64_encode(1).'/'.$post['h_i_id']);

					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('homepage/edit/'.base64_encode(1).'/'.$post['h_i_id']);
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
		 $homepage_details=$this->Homepage_model->get_homepage_details($post['h_i_id']);
				//echo '<pre>';print_r($homepage_details);exit;

		if($_FILES['image']['name']!=''){
					if($homepage_details['image']!=''){
						unlink('assets/homepage_images/'.$homepage_details['image']);
					}
					$banners=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/homepage_images/" . $_FILES['image']['name']);
					}else{
					$banners=$homepage_details['image'];
					}
					
				
         $update_data=array(
		'title'=>isset($post['title'])?$post['title']:'',
			'heading'=>isset($post['heading'])?$post['heading']:'',
			'description'=>isset($post['description'])?$post['description']:'',
			'image'=>$banners,
			'org_image'=>$banners,
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
			);
		//echo '<pre>';print_r($update_data);exit;
		$update=$this->Homepage_model->update_homepage_details($post['h_i_id'],$update_data);
		//echo '<pre>';print_r($update);exit;
		if(count($update)>0){
			$details=$this->Homepage_model->get_homepage_type_details($post['h_i_id']);
				  if(count($details)>0){
					  foreach($details as $lis){
						 $this->Homepage_model->delete_homepage_type($lis['h_p_id']); 
					  }
					}
					if(isset($post['type']) && count($post['type'])>0){
					$cnt=0;foreach($post['type'] as $list){ 
						  $add_data=array(
						  'h_i_id'=>isset($post['h_i_id'])?$post['h_i_id']:'',
						  'type'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Homepage_model->save_homepage_type_details($add_data);	

				       $cnt++;}
					}
			
			$this->session->set_flashdata('success',"Homepage images successfully  updated");	
			redirect('homepage/lists');	
			
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('homepage/lists');
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
	             $h_i_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($status==0){
					$check_ative=$this->Homepage_model->check_homepage_img_active_or_not();
		if(count($check_ative)>0){
			$this->session->set_flashdata('error',"At time only one homepage image is active. Please try again");	
			redirect('homepage/lists');	
		}
					}
					if($h_i_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Homepage_model->update_homepage_details($h_i_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"homepage images successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"homepage images successfully Activate.");
								}
								redirect('homepage/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('homepage/lists');
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
	             $h_i_id=base64_decode($this->uri->segment(3));
					
					if($h_i_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Homepage_model->update_homepage_details($h_i_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"homepage images successfully  successfully deleted.");
								redirect('homepage/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('homepage/lists');
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
