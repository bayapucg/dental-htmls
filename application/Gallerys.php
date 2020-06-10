<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Aboutus extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
	}
	public function index()
	{	
		$footer['footer_links']=$this->User_model->get_footer_links();
		$this->load->view('html/aboutus');
		$this->load->view('html/footer',$footer);
	}
	
	
	
	
	
	
	
	
}
