<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	

	public function index()
	{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/inc/footer');
	}


	public function place()
	{	

 
		$this->form_validation->set_rules('p_id', 'P_id', 'required|min_length[2]|max_length[3]');
		$this->form_validation->set_rules('place_name', 'Place_name', 'required|regex_match[/^[a-zA-Z ]*$/]');





		if ($this->form_validation->run() == FALSE) {


			

		$this->load->view('admin/inc/header');
		$this->load->view('admin/place');
		$this->load->view('admin/inc/footer');

		}else{



			$idata['p_id']=$this->input->post('p_id');
			$idata['place_name']=$this->input->post('place_name');



			//FILE UPLOAD CODE// 


			$this->db->insert('tbl_place_name',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);

			/////////////////
		}
	}


	public function fare()
	{	

 
		$this->form_validation->set_rules('f_id', 'F_id', 'required|min_length[1]|max_length[3]');
		$this->form_validation->set_rules('place_id_from', 'Place_id_from', 'required|min_length[2]|max_length[3]');
		$this->form_validation->set_rules('place_id_to', 'Place_id_to', 'required|min_length[2]|max_length[3]');
		$this->form_validation->set_rules('fare', 'Fare', 'required|min_length[2]|max_length[3]');
		$this->form_validation->set_rules('vehicle', 'Vehicle', 'required|regex_match[/^[a-zA-Z ]*$/]');






		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/fare');
		$this->load->view('admin/inc/footer');

		}else{



			$idata['f_id']=$this->input->post('f_id');
			$idata['place_id_from']=$this->input->post('place_id_from');
			$idata['place_id_to']=$this->input->post('place_id_to');
			$idata['fare']=$this->input->post('fare');
 			$idata['vehicle']=$this->input->post('vehicle');



			//FILE UPLOAD CODE// 

			




			$this->db->insert('tbl_fare_chart',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);


			/////////////////
		
		} 

	}


	public function vehicle_info()
	{	

 
		
		$this->form_validation->set_rules('vehicle_name', 'Vehicle_name', 'required|regex_match[/^[a-zA-Z ]*$/]');





		if ($this->form_validation->run() == FALSE) {

			$data['place']=$this->db->get('tbl_place_name')->result_array();


		$this->load->view('admin/inc/header');
		$this->load->view('admin/vehicle_info');
		$this->load->view('admin/inc/footer');

		}else{



			
			$idata['vehicle_name']=$this->input->post('vehicle_name');

///////file adding code/////
			
		if(!empty($_FILES) && ($_FILES['picture']['name'])){

		$config['upload_path'] = 'image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('picture')) {
		 $this->session->set_flashdata('message', $this->upload->display_errors());

		redirect('Admin/vehicle_info');
		} else {
		$avatar = $this->upload->data();
		$picture = $avatar['file_name'];

		$idata['picture']=$picture;
		}

		}else{

		$message='<div class="alert alert-danger">Please Add Your image</div>';

		$this->session->set_flashdata('message',$message);

		redirect('Admin/vehicle_info');

		}

	


			//FILE UPLOAD CODE// 


			$this->db->insert('tbl_vehicle_info',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);

			/////////////////
		}
	}


		public function view_vehicle()
	{

		$data['vehicle']=$this->db->get('tbl_vehicle_info')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-vehicle',$data);
		$this->load->view('admin/inc/footer');
	}

	public function view_place()
	{

		$data['place']=$this->db->get('tbl_place_name')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-place',$data);
		$this->load->view('admin/inc/footer');
	}



public function view_fare()
	{

		$data['fare']=$this->db->get('tbl_fare_chart')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-fare',$data);
		$this->load->view('admin/inc/footer');
	}


	public function view_booking()
	{

		$data['booking']=$this->db->select('*,a.place_name as place_from,b.place_name as place_to')->from('tbl_booking,tbl_vehicle_info,tbl_place_name as a,tbl_place_name as b,tbl_user')->where('tbl_booking.vehicle_id=tbl_vehicle_info.v_id')->where('tbl_booking.place_id_1=a.p_id')->where('tbl_booking.place_id_2=b.p_id')->where('tbl_booking.user_id=tbl_user.id')->get()->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-booking',$data);
		$this->load->view('admin/inc/footer');
	}
 

public function edit_vehicle($id)
	{	
		$data['title']='Edit Vehicle ';

 
		
		$this->form_validation->set_rules('vehicle_name', 'Vehicle_name', 'required|regex_match[/^[a-zA-Z ]*$/]');





		if ($this->form_validation->run() == FALSE) {

			$data['vehicle']=$this->db->where('v_id',$id)->get('tbl_vehicle_info')->result_array();
			
			

		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit_vehicle',$data);
		$this->load->view('admin/inc/footer');

		}else{



			
			$idata['vehicle_name']=$this->input->post('vehicle_name');


			


///////file adding code/////
			
		if(!empty($_FILES) && ($_FILES['picture']['name'])){

		$config['upload_path'] = 'image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('picture')) {
		 $this->session->set_flashdata('message', $this->upload->display_errors());

		redirect('Admin/edit_vehicle/'.$id);
		} else {
		$avatar = $this->upload->data();
		$picture = $avatar['file_name'];

		$idata['picture']=$picture;
		}

		}
			$this->db->where('v_id',$id)->update('tbl_vehicle_info',$idata);
	


			//FILE UPLOAD CODE// 


			$this->db->insert('tbl_vehicle_info',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);

			/////////////////
		}
	}
		public function delete_vehicle($id)
	
	{  
		$this->db->where('v_id',$id)->delete('tbl_vehicle_info');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	
	}

	

	public function edit_fare($id)
	{	
		$data['title']='Edit Fare ';

 
		
		$this->form_validation->set_rules('place_id_from', 'Place_id_from', 'required|min_length[2]|max_length[3]');
		$this->form_validation->set_rules('place_id_to', 'Place_id_to', 'required|min_length[2]|max_length[3]');
		$this->form_validation->set_rules('fare', 'Fare', 'required|min_length[2]|max_length[3]');

		$this->form_validation->set_rules('vehicle', 'Vehicle', 'required|regex_match[/^[a-zA-Z ]*$/]');




		if ($this->form_validation->run() == FALSE) {

			$data['fare']=$this->db->where('f_id',$id)->get('tbl_fare_chart')->result_array();
			
			

		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit_fare',$data);
		$this->load->view('admin/inc/footer');

		}else{



			
			$idata['place_id_from']=$this->input->post('place_id_from');
			$idata['place_id_to']=$this->input->post('place_id_to');
			$idata['fare']=$this->input->post('fare');
			$idata['vehicle']=$this->input->post('vehicle');




			

	$this->db->where('f_id',$id)->update('tbl_fare_chart',$idata);
	


			//FILE UPLOAD CODE// 


			$this->db->insert('tbl_fare_chart',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);

			/////////////////
		}
	}
public function delete_fare($id)
	
	{  
		$this->db->where('f_id',$id)->delete('tbl_fare_chart');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	
	}








}


		