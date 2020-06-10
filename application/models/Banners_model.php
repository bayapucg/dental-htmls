<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banners_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function save_banners_details($data){
	$this->db->insert('banners',$data);
	return $this->db->insert_id();	
	}
	public function get_banners_list(){
	$this->db->select('banners.*')->from('banners');
	$this->db->where('banners.status!=', 2);
	 return $this->db->get()->result_array();
	}
public  function get_banners_details($b_id){
		$this->db->select('*')->from('banners');
		$this->db->where('b_id',$b_id);
		return $this->db->get()->row_array();
	}
public  function update_banners_details($b_id,$data){
		$this->db->where('b_id',$b_id);
		return $this->db->update('banners',$data);
	}
	public  function delete_gallery($b_id){
		$this->db->where('b_id',$b_id);
		return $this->db->delete('gallery');
	}


}