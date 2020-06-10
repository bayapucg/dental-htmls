<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Back_end.php');
class Banners extends Back_end {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->model('Banners_model');	
	}
	public function add()
	{
		if($this->session->userdata('user_details'))
		{
			$admindetails=$this->session->userdata('user_details');
			$this->load->view('banners/add-banners');
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
      $image1[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
      move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/banners/" . $image1[$cnt]);
      $add_data=array(
      'image'=>$image1[$cnt],
      'title'=>isset($post['title'][$key])?$post['title'][$key]:'',
      'heading'=>isset($post['heading'][$key])?$post['heading'][$key]:'',
      'description'=>isset($post['description'][$key])?$post['description'][$key]:'',
      'org_image'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['a_id'],
      );
     
      $save=$this->Banners_model->save_banners_details($add_data);	
     }
	 
	 
      // here your insert query
     $cnt++;}	
		      if(count($save)>0){
					$this->session->set_flashdata('success',"Banners details successfully added");	
					redirect('banners/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('banners/add');
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
			$data['banners_list']=$this->Banners_model->get_banners_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('banners/banners-list',$data);
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
			$b_id=base64_decode($this->uri->segment(3));
			$data['banners_details']=$this->Banners_model->get_banners_details($b_id);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('banners/edit-banners',$data);
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
					$details=$this->Banners_model->get_banners_details($post['b_id']);
								//echo'<pre>';print_r($details);exit;

					if($_FILES['image']['name']!=''){
					if($details['image']!=''){
						unlink('assets/banners/'.$details['image']);
					}
					$bannerss=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/banners/" . $_FILES['image']['name']);
					}else{
					$bannerss=$details['image'];
					}
					$update_data=array(
					'title'=>isset($post['title'])?$post['title']:'',
					'heading'=>isset($post['heading'])?$post['heading']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'image'=>$bannerss,
					'org_image'=>$bannerss,
					'created_at'=>date('Y-m-d H:i:s'),
					'updated_at'=>date('Y-m-d H:i:s'),
					'created_by'=>$admindetails['a_id'],
					);
					//echo'<pre>';print_r($update_data);exit;
						$update=$this->Banners_model->update_banners_details($post['b_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Banners details successfully Updated');
							redirect('banners/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('banners/edit/'.base64_encode($post['b_id']));
						}
		    }else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	public function status(){
	 if($this->session->userdata('user_details'))
		{	
         $login_details=$this->session->userdata('user_details');	
	             $b_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					
					if($b_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Banners_model->update_banners_details($b_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Banners details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Banners details successfully Activate.");
								}
								redirect('banners/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('banners/lists');
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
	             $b_id=base64_decode($this->uri->segment(3));
					
					if($b_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Banners_model->update_banners_details($b_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Banners details successfully  successfully deleted.");
								redirect('banners/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('banners/lists');
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
