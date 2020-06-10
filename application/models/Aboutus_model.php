<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function save_aboutus_details($data){
	$this->db->insert('aboutus',$data);	
	return $this->db->insert_id();
	}
	public function save_aboutus_types_details($data){
	$this->db->insert('aboutus_types',$data);	
	return $this->db->insert_id();
	}
	public function get_aboutus_list(){
	$this->db->select('aboutus.*')->from('aboutus');
	$this->db->where('aboutus.status !=', 2);
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
	public function get_aboutus_details($a_id){
	$this->db->select('aboutus.*')->from('aboutus');
	$this->db->where('a_id',$a_id);
	$return=$this->db->get()->row_array();
		$about_list=$this->get_aboutus_type_details($return['a_id']);
		$data=$return;
		$data['aboutus_type']=$about_list;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_aboutus_type_details($a_id){
		$this->db->select('*')->from('aboutus_types');
		$this->db->where('aboutus_types.a_id',$a_id);
		return $this->db->get()->result_array();
		
	}
	public function delete_aboutus_type($a_t_id){
	$this->db->where('a_t_id',$a_t_id);
	return $this->db->delete('aboutus_types');
	}
	public function update_aboutus_details($a_id,$data){
	$this->db->where('a_id',$a_id);
    return $this->db->update("aboutus",$data);		
	}
	public function save_aboutus_type_details($data){
	$this->db->insert('aboutus_types',$data);	
	return $this->db->insert_id();
	}
	public function check_aboutus_active_or_not(){
	$this->db->select('*')->from('aboutus');
		$this->db->where('aboutus.status',1);
		return $this->db->get()->result_array();	
	}
	
	
	
	
	
	
	
	

}