<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function save_services_details($data){
	$this->db->insert('services',$data);
	return $this->db->insert_id();	
	}
	public function get_services_list(){
	$this->db->select('services.*')->from('services');
	$this->db->where('services.status!=', 2);
	 return $this->db->get()->result_array();
	}
public  function get_services_details($s_id){
		$this->db->select('*')->from('services');
		$this->db->where('s_id',$s_id);
		return $this->db->get()->row_array();
	}
public  function update_services_details($s_id,$data){
		$this->db->where('s_id',$s_id);
		return $this->db->update('services',$data);
	}
	public  function delete_gallery($g_id){
		$this->db->where('g_id',$g_id);
		return $this->db->delete('gallery');
	}

    /* services nameswise */
   public function get_servicesname_list(){
   $this->db->select('services.s_id,services.services_name')->from('services');
	$this->db->where('services.status',1);
	return $this->db->get()->result_array();
	}
    public function save_servicesname_details($data){
	$this->db->insert('servicesname_list',$data);	
	return $this->db->insert_id();
	}
    public function servicesname_list_data(){
	$this->db->select('servicesname_list.*,services.services_name')->from('servicesname_list');
	$this->db->join('services', 'services.s_id = servicesname_list.services', 'left');
    $this->db->where('servicesname_list.status !=',2);
    return $this->db->get()->result_array();
	}

    public function edit_servicesname_list($s_n_id){
	$this->db->select('*')->from('servicesname_list');
	$this->db->where('servicesname_list.s_n_id',$s_n_id);
	return $this->db->get()->row_array();
	}
    public function update_servicesname_details($s_n_id,$data){
	$this->db->where('s_n_id',$s_n_id);
	return $this->db->update('servicesname_list',$data);
	}
   
   public function check_servicesname_active_ornot($services){
		$this->db->select('*')->from('servicesname_list');
		$this->db->where('servicesname_list.services',$services);
		$this->db->where('servicesname_list.status',1);
		return $this->db->get()->row_array();
	}	   
	






}