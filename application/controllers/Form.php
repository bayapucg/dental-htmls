<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Form  extends Back_end {

	public function __construct() 
	{
		parent::__construct();	
		 $this->load->model('Doctors_model');
	}
	public function add()
	{
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			
			$this->load->view('form/add');
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
			$this->session->set_flashdata('error',"At time only one homepage is active. Please try again");	
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
					  $this->session->set_flashdata('success',"form details successfully added");	
							redirect('form/lists');	
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('form/add');
				}
		
	      }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	
	
	
	
	
	
	
	public function status(){
	 if($this->session->userdata('user_details'))
		{	
         $admindetails=$this->session->userdata('user_details');	
	             $t_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($t_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Testimonial_model->update_testimonial_details($t_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"testimonial details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"testimonial details successfully Activate.");
								}
								redirect('testimonial/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('testimonial/lists');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
          }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('admin');  
	   }


}
	public function delete()
{

		if($this->session->userdata('user_details'))
		{	
         $login_details=$this->session->userdata('user_details');	
	             $t_id=base64_decode($this->uri->segment(3));
					
					if($t_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Testimonial_model->update_testimonial_details($t_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"testimonial details successfully  successfully deleted.");
								redirect('testimonial/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('testimonial/lists');
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
