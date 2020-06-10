<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_testimonial_details($data){
		$this->db->insert('testimonial',$data);
		return $this->db->insert_id();
	}
	
	public  function get_testimonial_list(){
		$this->db->select('*')->from('testimonial');
		$this->db->where('testimonial.status !=', 2);
		return $this->db->get()->result_array();
	}
	public  function edit_testimonial_details($t_id){
		$this->db->select('*')->from('testimonial');
		$this->db->where('t_id',$t_id);
		return $this->db->get()->row_array();
	}
	
	public  function update_testimonial_details($t_id,$data){
		$this->db->where('t_id',$t_id);
		return $this->db->update('testimonial',$data);
	}
	public  function delete_gallery($t_id){
		$this->db->where('t_id',$t_id);
		return $this->db->delete('testimonial');
	}
	
	

}