<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	

	public function index()
	{

		$data['driver']=$this->db->where('Type','Driver')->get('tbl_user')->result_array();

		$this->load->view('include/header');
		$this->load->view('home',$data);
		$this->load->view('include/footer');
	}
}	