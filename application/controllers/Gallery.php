<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
		$this->load->model('Gallery_model');
		$this->load->model('Admin_model');
	}
	public function index()
	{	
		if(!$this->session->userdata('user_details'))
		{
			
		$data['gallery_list']=$this->Home_model->gallery_list();
		$data['contact_list']=$this->Home_model->get_contact_list();
        $data['services_list']=$this->Home_model->get_services_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/header',$data);
			$this->load->view('html/gallery',$data);
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
			$this->load->view('gallery/add-gallery');
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
			$admindetails=$this->session->userdata('user_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($_FILES);exit;
			$cnt='';if(isset($_FILES['image']['tmp_name']) && count($_FILES['image']['tmp_name'])>0){
				$cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
					if($_FILES["image"]["name"][$key]!=''){
						$profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
						$image1[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
						move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/gallery/" . $image1[$cnt]);
						$add_data=array(
						'image'=>$image1[$cnt],
						'org_image'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
						'status'=>1,
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						'created_by'=>$admindetails['a_id'],
						);
						//echo '<pre>';print_r($add_data);
						
						$save=$this->Gallery_model->save_gallery($add_data);
					}
						// here your insert query
					$cnt++;}
					if(count($save)>0){
							$this->session->set_flashdata('success','Gallery Image successfully added');
							redirect('gallery/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('gallery/add');
						}
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('gallery/add');
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
			
			$data['gallery_list']=$this->Gallery_model->get_gallery_list();
			$data['details']=$this->Admin_model->get_admin_details($user_details['a_id']);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('gallery/gallery-list',$data);
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
			$g_id=base64_decode($this->uri->segment(3));
			$data['gallery_details']=$this->Gallery_model->get_gallery_details($g_id);
			//echo '<pre>';print_r($data);exit;
			$data['details']=$this->Admin_model->get_admin_details($user_details['a_id']);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('gallery/edit-gallery',$data);
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
					$details=$this->Gallery_model->get_gallery_details($post['g_id']);
								//echo'<pre>';print_r($details);exit;

					if($_FILES['image']['name']!=''){
					if($details['image']!=''){
						unlink('assets/gallery/'.$details['image']);
					}
					$banners=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/gallery/" . $_FILES['image']['name']);
					}else{
					$banners=$details['image'];
					}
					$update_data=array(
					'image'=>$banners,
					'org_image'=>$banners,
					'created_at'=>date('Y-m-d H:i:s'),
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					//echo'<pre>';print_r($update_data);exit;
						$update=$this->Gallery_model->update_gallery_details($post['g_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Gallery Image successfully Updated');
							redirect('gallery/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('gallery/edit/'.base64_encode($post['g_id']));
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
			$g_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Gallery_model->update_gallery_details($g_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Gallery Image successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Gallery Image successfully activated');
							}
							redirect('gallery/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('gallery/lists');
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
	             $g_id=base64_decode($this->uri->segment(3));
					
					if($g_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Gallery_model->update_gallery_details($g_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Gallery Image successfully  successfully deleted.");
								redirect('gallery/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('gallery/lists');
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
