<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function gallery_list(){
	$this->db->select('*')->from('gallery');
	$this->db->where('gallery.status', 1);
	return $this->db->get()->result_array();
	}
	public function get_doctors_list_list(){
	$this->db->select('*')->from('doctors_details');
	$this->db->where('doctors_details.status', 1);
	return $this->db->get()->result_array();
	}
	public function get_banners_list(){
	$this->db->select('*')->from('banners');
	$this->db->where('banners.status', 1);
	return $this->db->get()->result_array();
	}
	public function get_testimonial_list(){
	$this->db->select('*')->from('testimonial');
	$this->db->where('testimonial.status', 1);
	return $this->db->get()->result_array();
	}
	public function get_fact_list(){
	$this->db->select('*')->from('facts');
	$this->db->where('facts.status', 1);
	return $this->db->get()->row_array();
	}
	public function get_contact_list(){
	$this->db->select('*')->from('contactus');
	$this->db->where('contactus.status', 1);
	return $this->db->get()->row_array();
	}
	public function get_aboutus_list(){
	$this->db->select('aboutus.*')->from('aboutus');
	$this->db->where('aboutus.status', 1);
	 $return=$this->db->get()->result_array();
	  foreach($return as $list){
	   $lists=$this->get_aboutus_type_list($list['a_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['a_id']]=$list;
	   $data[$list['a_id']]['aboutus_type_list']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_aboutus_type_list($a_id){
	 $this->db->select('aboutus_types.*')->from('aboutus_types');
     $this->db->where('aboutus_types.a_id',$a_id);
     $this->db->where('aboutus_types.status !=',2);
	 return $this->db->get()->result_array();
	}
	
	
	public function get_homepage_list(){
	$this->db->select('homepage_images.*')->from('homepage_images');
	$this->db->where('homepage_images.status', 1);
	 $return=$this->db->get()->result_array();
	  foreach($return as $list){
	   $lists=$this->get_homepage_type_list($list['h_i_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['h_i_id']]=$list;
	   $data[$list['h_i_id']]['homepage_type_list']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_homepage_type_list($h_i_id){
	 $this->db->select('homepage_types.*')->from('homepage_types');
     $this->db->where('homepage_types.h_i_id',$h_i_id);
     $this->db->where('homepage_types.status !=',2);
	 return $this->db->get()->result_array();
	}
	
	
	
	
	
	
	
	
	
	/* contact */
	public function save_contact_details($data){
	$this->db->insert('contact',$data);
	return $this->db->insert_id();	
	}
	/* subscribe */
	public  function check_email_subscribe($email){
		$this->db->select('*')->from('subscribe');
	    $this->db->where('email',$email);
	   return $this->db->get()->row_array();
	}
	public  function save_subscribe($data){
		$this->db->insert('subscribe',$data);
		return $this->db->insert_id();
	}
	
	public function get_services_list(){
	$this->db->select('services.*')->from('services');
     $this->db->where('services.status',1);
	 return $this->db->get()->result_array();
	}
	/* book appointment */
	public function save_bookappointment_details($data){
	$this->db->insert('book_appointment',$data);
	return $this->db->insert_id();	
	}
	public function get_services_list_details(){
	$this->db->select('servicesname_list.*,services.services_name,services.s_id')->from('servicesname_list');
	$this->db->join('services', 'services.s_id = servicesname_list.services', 'left');
     $this->db->where('servicesname_list.status',1);
	 return $this->db->get()->result_array();
	}
	
	
	
	
	
	
	
	
	
	
	

}