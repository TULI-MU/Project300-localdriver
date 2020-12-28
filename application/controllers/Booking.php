<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking  extends CI_Controller {

	

	public function index()
	{	


		$this->form_validation->set_rules('vehicle_id', 'vehicle', 'required');
		$this->form_validation->set_rules('place_id_1', 'Place From', 'required');
		$this->form_validation->set_rules('place_id_2', 'place To', 'required');
		$this->form_validation->set_rules('pickup_date', 'Pickup Date', 'required');
		$this->form_validation->set_rules('pickup_time', 'Time', 'required');
		$this->form_validation->set_rules('no_of_passengers', 'Passengers', 'required');
 




		if ($this->form_validation->run() == FALSE) {


		$data['vehicle']=$this->db->get('tbl_vehicle_info')->result_array();
		$data['place']=$this->db->get('tbl_place_name')->result_array();

		$this->load->view('include/header');
		$this->load->view('booking',$data);
		$this->load->view('include/footer');

		}else{


			$idata['vehicle_id']=$this->input->post('vehicle_id');
			$idata['place_id_1']=$this->input->post('place_id_1');
			$idata['place_id_2']=$this->input->post('place_id_2');
			$idata['pickup_date']=$this->input->post('pickup_date');
			$idata['pickup_time']=$this->input->post('pickup_time');
			$idata['no_of_passengers ']=$this->input->post('no_of_passengers');
			$idata['user_id ']=$this->session->userdata('id');
			 



			//FILE UPLOAD CODE// 


			$this->db->insert('tbl_booking',$idata);

			$message='<div class="alert alert-success">Booking Successfully Added</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);



		}
	}
}
