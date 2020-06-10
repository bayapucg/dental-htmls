<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Doctors  extends Back_end {

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
			
			$this->load->view('doctors/add');
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function addpost(){
	if($this->session->userdata('user_details'))
		{	
         $admindetails=$this->session->userdata('user_details');
	     $post=$this->input->post();	
		//echo'<pre>';print_r($post);exit;
		
		$cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
     if($_FILES["image"]["name"][$key]!=''){
      $profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
      $images[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
      move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/doctors/" . $images[$cnt]);
      $add_data=array(
      'image'=>$images[$cnt],
      'name'=>isset($post['name'][$key])?$post['name'][$key]:'',
	  'designation'=>isset($post['designation'][$key])?$post['designation'][$key]:'',
      'org_pic'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['a_id'],
      );
     //echo '<pre>';print_r($add_data);
      $save=$this->Doctors_model->save_doctors_image_details($add_data);	
     }
	 
	 
      // here your insert query
     $cnt++;}	
	 
	 //exit;
		      if(count($save)>0){
					$this->session->set_flashdata('success',"doctors details successfully added");	
					redirect('doctors/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('doctors/add');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('admin');  
	          }
	
  }		
	public function lists()
	{
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			$data['doctors_list']=$this->Doctors_model->get_doctors_list_details();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('doctors/list',$data);
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
			$d_d_id=base64_decode ($this->uri->segment(3));
			$data['edit_doctors']=$this->Doctors_model->edit_doctors_details($d_d_id);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('doctors/edit',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function editpost(){
	if($this->session->userdata('user_details'))
		{	
         $admindetails=$this->session->userdata('user_details');
	     $post=$this->input->post();	
	    //echo'<pre>';print_r($post);exit;
	   $edit_doctors=$this->Doctors_model->edit_doctors_details($post['d_d_id']);
	    //echo'<pre>';print_r($edit_doctors);exit;
	     
					if($_FILES['image']['name']!=''){
					
					$banners=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/doctors/" . $_FILES['image']['name']);

					}else{
					$banners=$edit_doctors['image'];
					}
					
	             $update_data=array(
	            'image'=>$banners,
				'name'=>isset($post['name'])?$post['name']:'',
				'designation'=>isset($post['designation'])?$post['designation']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['a_id'])?$admindetails['a_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Doctors_model->update_doctors_details($post['d_d_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','doctors details successfully updated');
							redirect('doctors/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('doctors/lists');
						}

						 }else{
						   $this->session->set_flashdata('error',"Please login and continue");
						  redirect('admin');  
					  }
	
   }	
   public function status(){
	 if($this->session->userdata('user_details'))
		{	
         $admindetails=$this->session->userdata('user_details');	
	             $d_d_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($d_d_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Doctors_model->update_doctors_details($d_d_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"doctors details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"doctors details successfully Activate.");
								}
								redirect('doctors/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('doctors/lists');
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
	             $d_d_id=base64_decode($this->uri->segment(3));
					
					if($d_d_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Doctors_model->update_doctors_details($d_d_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"doctors details successfully  successfully deleted.");
								redirect('doctors/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('doctors/lists');
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
	/* 
	public function addpost()
	{
	if($this->session->userdata('user_details'))
		{
			$login_details=$this->session->userdata('user_details');	
            $post=$this->input->post();		    
            //echo'<pre>';print_r($post);exit;
			
		    $save_data=array(
			'description'=>isset($post['description'])?$post['description']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
			);
		 //echo'<pre>';print_r($save_data);exit;
		$save=$this->Doctors_model->save_doctors_details($save_data);
		
		if(count($save)>0){
			if(isset($_FILES["image"]["name"]) && count($_FILES["image"]["name"])>0){
					$cnt=0;foreach($_FILES["image"]["name"] as $list){ 
					$temp = explode(".", $_FILES["image"]["name"][$cnt]);
					$img =$cnt.round(microtime(true)).'.'.end($temp);
					move_uploaded_file($_FILES['image']['tmp_name'][$cnt], "assets/doctors/" . $img);
						   if($_FILES["image"]["name"][$cnt]!=''){
								$add_data=array(
								'd_id'=>isset($save)?$save:'',
								'image'=>isset($img)?$img:'',
								'img_org_name'=>isset($_FILES["image"]["name"][$cnt])?$_FILES["image"]["name"][$cnt]:'',
								'name'=>isset($post['name'][$cnt])?$post['name'][$cnt]:'',
	                            'designation'=>isset($post['designation'][$cnt])?$post['designation'][$cnt]:'',
								'status'=>1,
								'created_at'=>date('Y-m-d H:i:s'),
								'updated_at'=>date('Y-m-d H:i:s'),
								'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
								);
								$this->Doctors_model->save_doctors_image_details($add_data);	
						   }

				       $cnt++;
					   }
					}
					  $this->session->set_flashdata('success',"Doctors details successfully added");	
							redirect('doctors/lists');	
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('doctors/add');
				}
		
	      }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
 
	
	
	public function edit()
	{
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			$d_id=base64_decode ($this->uri->segment(3));
			$data['edit_doctors']=$this->Doctors_model->edit_doctors_details($d_id);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('doctors/edit',$data);
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
		$login_details=$this->session->userdata('user_details');
        $post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
         $update_data=array(
			'description'=>isset($post['description'])?$post['description']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
			);
		//echo '<pre>';print_r($update_data);exit;
		$update=$this->Doctors_model->update_doctors_details($post['d_id'],$update_data);
		//echo '<pre>';print_r($update);exit;
		if(count($update)>0){
			$edit_doctors=$this->Doctors_model->edit_doctors_details($post['d_id']);
			$details=$this->Doctors_model->get_doctors_image_details($post['d_id']);
				 if(count($details)>0){
					  foreach($details as $lis){
						 $this->Doctors_model->delete_doctors_images($lis['d_d_id']); 
					  }
					}
			
					if(isset($_FILES["image"]["name"]) && count($_FILES["image"]["name"])>0){
					$cnt=0;foreach($_FILES["image"]["name"] as $list){ 
					$temp = explode(".", $_FILES["image"]["name"][$cnt]);
					$img =$cnt.round(microtime(true)).'.'.end($temp);
					move_uploaded_file($_FILES['image']['tmp_name'][$cnt], "assets/doctors/" . $img);
						   if($_FILES["image"]["name"][$cnt]!=''){
								$add_data=array(
								'd_id'=>isset($post['d_id'])?$post['d_id']:'',
								'image'=>isset($img)?$img:'',
								'img_org_name'=>isset($_FILES["image"]["name"][$cnt])?$_FILES["image"]["name"][$cnt]:'',
								'name'=>isset($post['name'][$cnt])?$post['name'][$cnt]:'',
	                            'designation'=>isset($post['designation'][$cnt])?$post['designation'][$cnt]:'',
								'status'=>1,
								'created_at'=>date('Y-m-d H:i:s'),
								'updated_at'=>date('Y-m-d H:i:s'),
								'created_by'=>isset($login_details['a_id'])?$login_details['a_id']:''
								);
								$this->Doctors_model->save_doctors_image_details($add_data);	
						   }

				       $cnt++;
					   }
					}
			$this->session->set_flashdata('success',"Doctors details successfully  updated");	
			redirect('doctors/lists');	
			
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('doctors/lists');
			}	
			
	       }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}	
	*/
	
	
	

