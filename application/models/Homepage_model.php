<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function save_homepage_details($data){
	$this->db->insert('homepage_images',$data);	
	return $this->db->insert_id();
	}
	public function save_homepage_types_details($data){
	$this->db->insert('homepage_types',$data);	
	return $this->db->insert_id();
	}
	public function get_homepage_list(){
	$this->db->select('homepage_images.*')->from('homepage_images');
	$this->db->where('homepage_images.status !=', 2);
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
	public function get_homepage_details($h_i_id){
	$this->db->select('homepage_images.*')->from('homepage_images');
	$this->db->where('h_i_id',$h_i_id);
	$return=$this->db->get()->row_array();
		$about_list=$this->get_homepage_type_details($return['h_i_id']);
		$data=$return;
		$data['homepage_type']=$about_list;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_homepage_type_details($h_i_id){
		$this->db->select('*')->from('homepage_types');
		$this->db->where('homepage_types.h_i_id',$h_i_id);
		return $this->db->get()->result_array();
		
	}
	public function delete_homepage_type($h_p_id){
	$this->db->where('h_p_id',$h_p_id);
	return $this->db->delete('homepage_types');
	}
	public function update_homepage_details($h_i_id,$data){
	$this->db->where('h_i_id',$h_i_id);
    return $this->db->update("homepage_images",$data);		
	}
	public function save_homepage_type_details($data){
	$this->db->insert('homepage_types',$data);	
	return $this->db->insert_id();
	}
	public function check_homepage_img_active_or_not(){
	$this->db->select('*')->from('homepage_images');
		$this->db->where('homepage_images.status',1);
		return $this->db->get()->result_array();	
	}
	
	
	
	
	
	
	
	

}