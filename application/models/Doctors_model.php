<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctors_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_doctors_image_details($data){
		$this->db->insert('doctors_details',$data);
		return $this->db->insert_id();
	}
	public function get_doctors_list_details(){
	$this->db->select('doctors_details.*')->from('doctors_details');
	$this->db->where('doctors_details.status !=', 2);
	return $this->db->get()->result_array();
	}
	public function edit_doctors_details($d_d_id){
	$this->db->select('*')->from('doctors_details');
		$this->db->where('doctors_details.d_d_id',$d_d_id);
		return $this->db->get()->row_array();
		
	}
	public function update_doctors_details($d_d_id,$data){
	$this->db->where('d_d_id',$d_d_id);
		return $this->db->update('doctors_details',$data);
	}
	
	
	/*
	public  function save_doctors_details($data){
		$this->db->insert('doctors',$data);
		return $this->db->insert_id();
	}
	public  function save_doctors_image_details($data){
		$this->db->insert('doctors_details',$data);
		return $this->db->insert_id();
	}
	
	
	public function get_doctors_list_details(){
	$this->db->select('doctors.*')->from('doctors');
	$this->db->where('doctors.status !=', 2);
	 $return=$this->db->get()->result_array();
	  foreach($return as $list){
	   $lists=$this->get_doctors_image_list($list['d_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['d_id']]=$list;
	   $data[$list['d_id']]['doctors_imge_list']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_doctors_image_list($d_id){
	 $this->db->select('doctors_details.*')->from('doctors_details');
     $this->db->where('doctors_details.d_id',$d_id);
     $this->db->where('doctors_details.status !=',2);
	 return $this->db->get()->result_array();
	}
	
	
	
	public function edit_doctors_details($d_id){
	$this->db->select('doctors.*')->from('doctors');
	$this->db->where('d_id',$d_id);
	$return=$this->db->get()->row_array();
		$about_list=$this->get_doctors_image_details($return['d_id']);
		$data=$return;
		$data['doctors_list']=$about_list;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_doctors_image_details($d_id){
		$this->db->select('*')->from('doctors_details');
		$this->db->where('doctors_details.d_id',$d_id);
		return $this->db->get()->result_array();
		
	}
	
	public  function update_doctors_details($d_id,$data){
		$this->db->where('d_id',$d_id);
		return $this->db->update('doctors',$data);
	}
	public function delete_doctors_images($d_d_id){
	$this->db->where('d_d_id',$d_d_id);
	return $this->db->delete('doctors_details');
	}
	*/
	

}