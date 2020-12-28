<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	

	public function index()
	{


		if($this->input->post('submit')){


			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['subject']=$this->input->post('subject');
			$idata['message']=$this->input->post('message');



			$message='<div class="alert alert-success">Message Successfully Sent</div>';

			$this->session->set_flashdata('message',$message);
		 

		 	$this->db->insert('tbl_contact',$idata);





		}







		$this->load->view('include/header');
		$this->load->view('contact');
		$this->load->view('include/footer');
	}
}
