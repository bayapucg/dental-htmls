<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function login_details($data){
		$this->db->select('*')->from('admin');		
		$this->db->where('email', $data['email']);
		$this->db->where('password',$data['password']);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();
	}
	public  function get_admin_details($a_id){
		$this->db->select('*')->from('admin');		
		$this->db->where('a_id',$a_id);
        return $this->db->get()->row_array();
	}
	/* forgot password*/
	public  function check_email_exits($email){
		$this->db->select('a_id,email,org_password')->from('admin');
		$this->db->where('email',$email);
		return $this->db->get()->row_array();
	}
	public  function update_profile_details($a_id,$data){
		$this->db->where('a_id',$a_id);
		return $this->db->update('admin',$data);
	}
	public  function get_adminpassword_details($a_id){
		$this->db->select('admin.password')->from('admin');
		$this->db->where('admin.a_id',$a_id);
		return $this->db->get()->row_array();
	}
	  /* contactus */
	 public function get_contact_form_details(){
	$this->db->select('*')->from('contactus');
	    return $this->db->get()->row_array();
	} 
	 public function update_contact_form_details($data){
		return $this->db->update("contactus",$data);
	}
	public function save_contactus_form_details($data){
	$this->db->insert('contactus',$data);	
	return $this->db->insert_id();	
	} 
	  
	 /* facts */
	 public function get_facts_details(){
	$this->db->select('*')->from('facts');
	    return $this->db->get()->row_array();
	} 
	 public function update_facts_details($data){
		return $this->db->update("facts",$data);
	}
	public function save_facts_details($data){
	$this->db->insert('facts',$data);	
	return $this->db->insert_id();	
	}   
	public function get_contact_list(){
	$this->db->select('*')->from('contact');
	return $this->db->get()->result_array();
	} 	
	
	/* subscribe */
	public function get_subscribe_list(){
	$this->db->select('*')->from('subscribe');
	return $this->db->get()->result_array();
	}
	/* book app */
	public function get_bookappointment_list(){
	$this->db->select('*')->from('book_appointment');
	return $this->db->get()->result_array();
	}
	
	
	
	
	
	public function get_services_list_details($s_id){
	$this->db->select('servicesname_list.*,services.services_name')->from('servicesname_list');
	$this->db->join('services', 'services.s_id = servicesname_list.services', 'left');
	$this->db->where('servicesname_list.services',$s_id);
	$this->db->where('servicesname_list.status',1);
	return $this->db->get()->row_array();
	}
	
	
	
	
	  

}